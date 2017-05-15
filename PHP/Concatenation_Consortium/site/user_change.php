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

if (!$_SESSION['admin']) {
	Header('Location: index.php');
}

//get the action from the previous page.
$action = filter_input(INPUT_POST, 'action');	
//get the user ID from the url, stripping everything except numbers
$userid = preg_replace("/\D/", "", $action);


?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 20%;
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

	<center>
            <?php
            switch ($action) {
						
                case ''.$userid.'': //the user ID
			
					//get the product data, assign it to the modify_users array			
					try {
						$query = 'SELECT * FROM users WHERE userID=:userID';
						$statement = $db->prepare($query);
						$statement->bindParam(':userID', $userid);
						$statement->execute();
						$modify_users = $statement->fetchAll();
						$statement->closeCursor();
					} catch (PDOException $e) {
						$error_message = $e->getMessage();
						display_db_error($error_message);
					}
					
					//parse through the array, assign the good stuff					
					$admin = $modify_users['0']['admin'];
					$username = $modify_users['0']['username'];
					$email = $modify_users['0']['email'];
					$firstName = $modify_users['0']['firstName'];
					$lastName = $modify_users['0']['lastName'];
					$dateofBirth = $modify_users['0']['dateofBirth'];
					$country = $modify_users['0']['country'];
							
					echo '<h3> Modify User: </h3>';	
						
					//show a form with modifiable fields, with the existing user data as the current values						
					echo '<form action="?submit_changes" method="post">
							<table>
							  <tr>
								<th>Username:</th>
								<th><input type="text" autofocus="autofocus" name="username" value="'. $username .'" required>
									<input type="hidden" name="uid" value="'. $userid .'"></th>
							  </tr>
							  <tr>
								<th>Admin:</th>';
								if ($admin == "1") {
									echo '<th>Yes<input type="radio" name="admin" value="1" checked>   No<input type="radio" name="admin" value="0"></th>';
								} else  {
									echo '<th>Yes<input type="radio" name="admin" value="1">   No<input type="radio" name="admin" value="0" checked></th>';
								}
							  echo '</tr>
							  <tr>
								<th>Email:</th>
								<th><input type="text" name="email" value="'. $email .'" required></th>
							  </tr>
							  <tr>
								<th>First Name:</th>
								<th><input type="text" name="fName" value="'. $firstName .'" required></th>
							  </tr>
							  <tr>
								<th>Last Name:</th>
								<th><input type="text" name="lastName" value="'. $lastName .'" required></th>
							  </tr>
							  <tr>
								<th>Date of Birth:</th>
								<th><input type="text" name="dateofBirth" value="'. $dateofBirth .'" required></th>
							  </tr>
							  <tr>
								<th>Country:</th>
								<th><input type="text" name="country" value="'. $country .'" required></th>
							  </tr>
							 </table><br>
								<input type="hidden" name="action" value="submit_changes">
								<input type="submit" value="Submit Changes for \''. $username .'\'">
								<button type="cancel" onclick="window.location=\'admin.php?modify_users\';return false;">Cancel</button>
							</form><br>
							<form action="?delete_user" method="post">
										<input type="hidden" name="action" value="delete_user">
										<input type="hidden" name="uid" value="'. $userid .'">
										<input type="submit" style="background-color:red;color:white;" onclick="return confirm(\'Are you sure you want to delete the following user:\n\n'. $username . '\n\nWARNING:  This action can not be undone.\')" name="submit" value="Delete '. $username .'"> 
							</form>	';
					
					break; 
					
				case 'submit_changes': //submitting the modifications made above
				
					//getting the data from the form				
					$change_userid = filter_input(INPUT_POST, 'uid'); 	 	
					$change_uadmin = $_POST['admin']; 
					$change_uname = filter_input(INPUT_POST, 'username'); 	
					$change_uemail = filter_input(INPUT_POST, 'email'); 			
					$change_ufirstName = filter_input(INPUT_POST, 'fName');				
					$change_ulastName = filter_input(INPUT_POST, 'lastName');	
					$change_udateofBirth = filter_input(INPUT_POST, 'dateofBirth');
					$change_ucountry = filter_input(INPUT_POST, 'country');

					//passing along the data to the update_user function
					update_user($change_userid, $change_uadmin, $change_uname, $change_uemail, $change_ufirstName, $change_ulastName, $change_udateofBirth, $change_ucountry);
					
					Header('Location: admin.php');
					break;
					
				case 'delete_user':  //deleting the user
				
					//getting the user id from the butotn
					$del_userid = filter_input(INPUT_POST, 'uid'); 

					//passing along the user id to the delete_user function.  no turning back.
					delete_user($del_userid);
					
					Header('Location: admin.php');
					break;
					
				default:
                	break;
			}
				?>
            
            
            </center>
            
    	</p>
	</div>
</div>
<?php include 'view/footer.php'; // include the footer ?>