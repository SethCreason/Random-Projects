<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php 
//include necessary files
include('view/header.php'); 
require_once('util/main.php');
require_once('model/database.php');
require_once('model/db_functions.php');
require_once('lib/password.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'view_account';
}
?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: auto;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>  
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="container">    
	<div class="row">
		<p>	
        	
            <?php

				//If the user isn't logged in, direct them to the login page	
				if (!isset($_SESSION['username'])) {
					
					Header('Location: login.php');
					
				} else { //Otherwise, get data from the db by using the session username
						
					$username = $_SESSION['username'];
				
					try {
					$query = 'SELECT * FROM users WHERE username = :username';
					$statement = $db->prepare($query);
					$statement->bindParam(':username', $username);
					$statement->execute();
					$account = $statement->fetchAll();
					$statement->closeCursor();
					} catch (PDOException $e) {
						$error_message = $e->getMessage();
						display_db_error($error_message);
					}	
					
					$uname = $account['0']['username'];
					$pword = $account['0']['password'];
					
					$hashed = password_hash($pword, PASSWORD_BCRYPT);

					$email = $account['0']['email'];
					$firstName = $account['0']['firstName'];
					$lastName = $account['0']['lastName'];
					$dob = $account['0']['dateofBirth'];
					$format_dob = strtotime( $dob );
					$dob2 = date( 'm/d/Y', $format_dob );
					
					$country = $account['0']['country'];
					
				}
	
				//If there's an error message, display it
				if (isset($_SESSION['message'])) {
					echo '<center><h3><font color="red">' . $_SESSION['message'] . '</font></h3><br>';
					unset($_SESSION['message']);
				}
				
			?> 
            <center>
            <?php
            switch ($action) {	
						
                case 'view_account': //Display the user account info based on information drawn from the db
					echo '<h3> Account Info: </h3>
					<table>
					  <tr>
						<th>Username:</th>
						<th>'. $uname .'</th>
					  </tr>
					  <tr>
						<th>E-Mail:</th>
						<th>'. $email .'</th>
					  </tr>
					  <tr>
						<th>Name:</th>
						<th>'. $firstName . ' ' . $lastName .'</th>
					  </tr>
					  <tr>
						<th>Date of Birth:</th>
						<th>'. $dob2 .'</th>
					  </tr>
					  <tr>
						<th>Country:</th>
						<th>'. $country .'</th>
					  </tr>
					</table><br>
					<form action="?account_change" method="post">
						<input type="hidden" name="action" value="account_change">
						<input type="submit" value="Make Changes">
					</form>	';
					break; 			
							
                case 'account_change': //Make the user verify their password, then allow them to modify the values for their account	
					echo '<h3> Account Info: </h3>
					<form action="?submit_change" method="post">
					<table>
					  <tr>
						<th>Username:</th>
						<th>'. $uname .'</th>
					  </tr>
					  <tr>
						<th>Verify Current Password:</th>
						<th><input type="password" autofocus="autofocus" name="verify_pass" placeholder="*******" required></th>
					  </tr>
					  <tr>
						<th>E-Mail:</th>
						<th><input type="text" name="change_email" value="'. $email .'" required></th>
					  </tr>
					  <tr>
						<th>First Name:</th>
						<th><input type="text" name="change_firstName" id="change_firstName" value="'. $firstName .'" required></th>
					  </tr>
					  <tr>
						<th>Last Name:</th>
						<th><input type="text" name="change_lastName" value="'. $lastName .'" required></th>
					  </tr>
					  <tr>
						<th>Date of Birth:</th>
						<th><input type="text" name="change_dob" id="datepicker" value="'. $dob2 .'" required></th>
					  </tr>
					  <tr>
						<th>Country:</th>
						<!-- <th>'. file_get_contents("countries.txt") .'</th> -->
							<th><select name="country">
								<option value="'. $country .'" selected>'. $country .'</option> 
								<option value="AFG">Afghanistan</option>
								<option value="ALA">Åland Islands</option>
								<option value="ALB">Albania</option>
								<option value="DZA">Algeria</option>
								<option value="ASM">American Samoa</option>
								<option value="AND">Andorra</option>
								<option value="AGO">Angola</option>
								<option value="AIA">Anguilla</option>
								<option value="ATA">Antarctica</option>
								<option value="ATG">Antigua and Barbuda</option>
								<option value="ARG">Argentina</option>
								<option value="ARM">Armenia</option>
								<option value="ABW">Aruba</option>
								<option value="AUS">Australia</option>
								<option value="AUT">Austria</option>
								<option value="AZE">Azerbaijan</option>
								<option value="BHS">Bahamas</option>
								<option value="BHR">Bahrain</option>
								<option value="BGD">Bangladesh</option>
								<option value="BRB">Barbados</option>
								<option value="BLR">Belarus</option>
								<option value="BEL">Belgium</option>
								<option value="BLZ">Belize</option>
								<option value="BEN">Benin</option>
								<option value="BMU">Bermuda</option>
								<option value="BTN">Bhutan</option>
								<option value="BOL">Bolivia, Plurinational State of</option>
								<option value="BES">Bonaire, Sint Eustatius and Saba</option>
								<option value="BIH">Bosnia and Herzegovina</option>
								<option value="BWA">Botswana</option>
								<option value="BVT">Bouvet Island</option>
								<option value="BRA">Brazil</option>
								<option value="IOT">British Indian Ocean Territory</option>
								<option value="BRN">Brunei Darussalam</option>
								<option value="BGR">Bulgaria</option>
								<option value="BFA">Burkina Faso</option>
								<option value="BDI">Burundi</option>
								<option value="KHM">Cambodia</option>
								<option value="CMR">Cameroon</option>
								<option value="CAN">Canada</option>
								<option value="CPV">Cape Verde</option>
								<option value="CYM">Cayman Islands</option>
								<option value="CAF">Central African Republic</option>
								<option value="TCD">Chad</option>
								<option value="CHL">Chile</option>
								<option value="CHN">China</option>
								<option value="CXR">Christmas Island</option>
								<option value="CCK">Cocos (Keeling) Islands</option>
								<option value="COL">Colombia</option>
								<option value="COM">Comoros</option>
								<option value="COG">Congo</option>
								<option value="COD">Congo, the Democratic Republic of the</option>
								<option value="COK">Cook Islands</option>
								<option value="CRI">Costa Rica</option>
								<option value="CIV">Côte dIvoire</option>
								<option value="HRV">Croatia</option>
								<option value="CUB">Cuba</option>
								<option value="CUW">Curaçao</option>
								<option value="CYP">Cyprus</option>
								<option value="CZE">Czech Republic</option>
								<option value="DNK">Denmark</option>
								<option value="DJI">Djibouti</option>
								<option value="DMA">Dominica</option>
								<option value="DOM">Dominican Republic</option>
								<option value="ECU">Ecuador</option>
								<option value="EGY">Egypt</option>
								<option value="SLV">El Salvador</option>
								<option value="GNQ">Equatorial Guinea</option>
								<option value="ERI">Eritrea</option>
								<option value="EST">Estonia</option>
								<option value="ETH">Ethiopia</option>
								<option value="FLK">Falkland Islands (Malvinas)</option>
								<option value="FRO">Faroe Islands</option>
								<option value="FJI">Fiji</option>
								<option value="FIN">Finland</option>
								<option value="FRA">France</option>
								<option value="GUF">French Guiana</option>
								<option value="PYF">French Polynesia</option>
								<option value="ATF">French Southern Territories</option>
								<option value="GAB">Gabon</option>
								<option value="GMB">Gambia</option>
								<option value="GEO">Georgia</option>
								<option value="DEU">Germany</option>
								<option value="GHA">Ghana</option>
								<option value="GIB">Gibraltar</option>
								<option value="GRC">Greece</option>
								<option value="GRL">Greenland</option>
								<option value="GRD">Grenada</option>
								<option value="GLP">Guadeloupe</option>
								<option value="GUM">Guam</option>
								<option value="GTM">Guatemala</option>
								<option value="GGY">Guernsey</option>
								<option value="GIN">Guinea</option>
								<option value="GNB">Guinea-Bissau</option>
								<option value="GUY">Guyana</option>
								<option value="HTI">Haiti</option>
								<option value="HMD">Heard Island and McDonald Islands</option>
								<option value="VAT">Holy See (Vatican City State)</option>
								<option value="HND">Honduras</option>
								<option value="HKG">Hong Kong</option>
								<option value="HUN">Hungary</option>
								<option value="ISL">Iceland</option>
								<option value="IND">India</option>
								<option value="IDN">Indonesia</option>
								<option value="IRN">Iran, Islamic Republic of</option>
								<option value="IRQ">Iraq</option>
								<option value="IRL">Ireland</option>
								<option value="IMN">Isle of Man</option>
								<option value="ISR">Israel</option>
								<option value="ITA">Italy</option>
								<option value="JAM">Jamaica</option>
								<option value="JPN">Japan</option>
								<option value="JEY">Jersey</option>
								<option value="JOR">Jordan</option>
								<option value="KAZ">Kazakhstan</option>
								<option value="KEN">Kenya</option>
								<option value="KIR">Kiribati</option>
								<option value="PRK">Korea, Democratic Peoples Republic of</option>
								<option value="KOR">Korea, Republic of</option>
								<option value="KWT">Kuwait</option>
								<option value="KGZ">Kyrgyzstan</option>
								<option value="LAO">Lao Peoples Democratic Republic</option>
								<option value="LVA">Latvia</option>
								<option value="LBN">Lebanon</option>
								<option value="LSO">Lesotho</option>
								<option value="LBR">Liberia</option>
								<option value="LBY">Libya</option>
								<option value="LIE">Liechtenstein</option>
								<option value="LTU">Lithuania</option>
								<option value="LUX">Luxembourg</option>
								<option value="MAC">Macao</option>
								<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
								<option value="MDG">Madagascar</option>
								<option value="MWI">Malawi</option>
								<option value="MYS">Malaysia</option>
								<option value="MDV">Maldives</option>
								<option value="MLI">Mali</option>
								<option value="MLT">Malta</option>
								<option value="MHL">Marshall Islands</option>
								<option value="MTQ">Martinique</option>
								<option value="MRT">Mauritania</option>
								<option value="MUS">Mauritius</option>
								<option value="MYT">Mayotte</option>
								<option value="MEX">Mexico</option>
								<option value="FSM">Micronesia, Federated States of</option>
								<option value="MDA">Moldova, Republic of</option>
								<option value="MCO">Monaco</option>
								<option value="MNG">Mongolia</option>
								<option value="MNE">Montenegro</option>
								<option value="MSR">Montserrat</option>
								<option value="MAR">Morocco</option>
								<option value="MOZ">Mozambique</option>
								<option value="MMR">Myanmar</option>
								<option value="NAM">Namibia</option>
								<option value="NRU">Nauru</option>
								<option value="NPL">Nepal</option>
								<option value="NLD">Netherlands</option>
								<option value="NCL">New Caledonia</option>
								<option value="NZL">New Zealand</option>
								<option value="NIC">Nicaragua</option>
								<option value="NER">Niger</option>
								<option value="NGA">Nigeria</option>
								<option value="NIU">Niue</option>
								<option value="NFK">Norfolk Island</option>
								<option value="MNP">Northern Mariana Islands</option>
								<option value="NOR">Norway</option>
								<option value="OMN">Oman</option>
								<option value="PAK">Pakistan</option>
								<option value="PLW">Palau</option>
								<option value="PSE">Palestinian Territory, Occupied</option>
								<option value="PAN">Panama</option>
								<option value="PNG">Papua New Guinea</option>
								<option value="PRY">Paraguay</option>
								<option value="PER">Peru</option>
								<option value="PHL">Philippines</option>
								<option value="PCN">Pitcairn</option>
								<option value="POL">Poland</option>
								<option value="PRT">Portugal</option>
								<option value="PRI">Puerto Rico</option>
								<option value="QAT">Qatar</option>
								<option value="REU">Réunion</option>
								<option value="ROU">Romania</option>
								<option value="RUS">Russian Federation</option>
								<option value="RWA">Rwanda</option>
								<option value="BLM">Saint Barthélemy</option>
								<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KNA">Saint Kitts and Nevis</option>
								<option value="LCA">Saint Lucia</option>
								<option value="MAF">Saint Martin (French part)</option>
								<option value="SPM">Saint Pierre and Miquelon</option>
								<option value="VCT">Saint Vincent and the Grenadines</option>
								<option value="WSM">Samoa</option>
								<option value="SMR">San Marino</option>
								<option value="STP">Sao Tome and Principe</option>
								<option value="SAU">Saudi Arabia</option>
								<option value="SEN">Senegal</option>
								<option value="SRB">Serbia</option>
								<option value="SYC">Seychelles</option>
								<option value="SLE">Sierra Leone</option>
								<option value="SGP">Singapore</option>
								<option value="SXM">Sint Maarten (Dutch part)</option>
								<option value="SVK">Slovakia</option>
								<option value="SVN">Slovenia</option>
								<option value="SLB">Solomon Islands</option>
								<option value="SOM">Somalia</option>
								<option value="ZAF">South Africa</option>
								<option value="SGS">South Georgia and the South Sandwich Islands</option>
								<option value="SSD">South Sudan</option>
								<option value="ESP">Spain</option>
								<option value="LKA">Sri Lanka</option>
								<option value="SDN">Sudan</option>
								<option value="SUR">Suriname</option>
								<option value="SJM">Svalbard and Jan Mayen</option>
								<option value="SWZ">Swaziland</option>
								<option value="SWE">Sweden</option>
								<option value="CHE">Switzerland</option>
								<option value="SYR">Syrian Arab Republic</option>
								<option value="TWN">Taiwan, Province of China</option>
								<option value="TJK">Tajikistan</option>
								<option value="TZA">Tanzania, United Republic of</option>
								<option value="THA">Thailand</option>
								<option value="TLS">Timor-Leste</option>
								<option value="TGO">Togo</option>
								<option value="TKL">Tokelau</option>
								<option value="TON">Tonga</option>
								<option value="TTO">Trinidad and Tobago</option>
								<option value="TUN">Tunisia</option>
								<option value="TUR">Turkey</option>
								<option value="TKM">Turkmenistan</option>
								<option value="TCA">Turks and Caicos Islands</option>
								<option value="TUV">Tuvalu</option>
								<option value="UGA">Uganda</option>
								<option value="UKR">Ukraine</option>
								<option value="ARE">United Arab Emirates</option>
								<option value="GBR">United Kingdom</option>
								<option value="USA">United States</option>
								<option value="UMI">United States Minor Outlying Islands</option>
								<option value="URY">Uruguay</option>
								<option value="UZB">Uzbekistan</option>
								<option value="VUT">Vanuatu</option>
								<option value="VEN">Venezuela, Bolivarian Republic of</option>
								<option value="VNM">Viet Nam</option>
								<option value="VGB">Virgin Islands, British</option>
								<option value="VIR">Virgin Islands, U.S.</option>
								<option value="WLF">Wallis and Futuna</option>
								<option value="ESH">Western Sahara</option>
								<option value="YEM">Yemen</option>
								<option value="ZMB">Zambia</option>
								<option value="ZWE">Zimbabwe</option>
							</select></th>
					  </tr>
					</table><br>					
						<input type="hidden" name="action" value="submit_change">
						<input type="submit" name="submit" value="Submit Changes">  
						
						<button type="cancel" onclick="window.location=\'account.php\';return false;">Cancel</button>
					</form><br>					
					
					<form action="?password_change" method="post">
						<input type="hidden" name="action" value="password_change">
						<input type="submit" value="Change Password">
					</form>';
					break; 	
									
                case 'password_change': //Make the user enter their current password once, then  the new password (twice)
					echo '<h3> Change Password: </h3>
					<form action="?submit_pass_change" method="post">
					<table>
					  <tr>
						<th>Username:</th>
						<th>'. $uname .'</th>
					  </tr>
					  <tr>
						<th>Current Password:</th>
						<th><input type="password" name="current_pass" placeholder="*******" required></th>
					  </tr>
					  <tr>
						<th>New Password:</th>
						<th><input type="password" name="new_pass" placeholder="*******" required></th>
					  </tr>
						<th>Verify New Password:</th>
						<th><input type="password" name="verify_pass" id="verify_new_pass" placeholder="*******" required oninput="check(this)">'; ?>
							<!-- Password validation -->
								<script language='javascript' type='text/javascript'>
									function check(input) {
										if (input.value != document.getElementById('new_pass').value) {
											input.setCustomValidity('Passwords must match.');
										} else {
											// input is valid -- reset the error message
											input.setCustomValidity('');
										}
									}
								</script>
							<!-- Password validation -->
		  			<?php echo 
		  			'</th>
					</table><br>					
						<input type="hidden" name="action" value="submit_pass_change">
						<input type="submit" name="submit" value="Submit Changes">  
						
						<button type="cancel" onclick="window.location=\'account.php\';return false;">Cancel</button>
					</form>';
					break; 	
									
                case 'submit_pass_change': //Verifying the current password, then hasing and committing the new password to the db	
				
					$current_pass = filter_input(INPUT_POST, 'current_pass');	
						
					if (password_verify($current_pass, $account['0']['password']) != '1') {
						$_SESSION['message'] = 'Invalid current password.';
						Header('Location: account.php');
						break;
					} else {
						$new_pass = filter_input(INPUT_POST, 'new_pass'); 	
						$new_hash_pass = password_hash($new_pass, PASSWORD_BCRYPT);		
						
						update_password($uname, $new_hash_pass);
						
						Header('Location: account.php');
						break;
					}
									
                case 'submit_change': //Verifying the current password, then comitting the changes made to the account to the db
				
					$verify_pass = filter_input(INPUT_POST, 'verify_pass');	
						
					//If the entered password does not match the unhashed password, return an error and redirect
					if (password_verify($verify_pass, $account['0']['password']) != '1') {
						$_SESSION['message'] = 'Invalid password.';
						Header('Location: account.php');
						break;
					} else { //Otherwise, assign the values from the form 
						$change_email = filter_input(INPUT_POST, 'change_email'); 				
						$change_firstName = filter_input(INPUT_POST, 'change_firstName');				
						$change_lastName = filter_input(INPUT_POST, 'change_lastName');				
						
						$change_dob = filter_input(INPUT_POST, 'change_dob'); 
						$change_dob_prepare = strtotime( $change_dob );
						$change_dob_formatted = date( 'Y-m-d', $change_dob_prepare );	
						
						$change_country = filter_input(INPUT_POST, 'country');
	
						//passing along the account info to the update_account function. 
						update_account($uname, $change_email, $change_firstName, $change_lastName, $change_dob_formatted, $change_country);
						
						Header('Location: account.php');
						break;
					}
					
				default:
                	break;
			}
				?>
            
            
            </center>
            
    	</p>
	</div>
</div>
<?php include 'view/footer.php'; // include the footer ?>