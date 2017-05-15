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
	Header('Location: index.php'); //if not logged in as admin, redirect to home page
}

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'default_view'; //by default, show both buttons
}
?>
<style>
form {
    display: inline;
}
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
			
			//If there's an error message, display it		
			if (isset($_SESSION['message'])) {
				echo '<center><h3><font color="red">' . $_SESSION['message'] . '</font></h3><br>';
				unset($_SESSION['message']);
			}
			
            switch ($action) {	
						
                case 'default_view': 
					echo  
						'<div class="container">    
							<div class="row">
								<center><p>	
								<h3> Admin Control Panel: </h3>
									<form action="?modify_users" method="post">
												<input type="hidden" name="action" value="modify_users">
												<input type="submit" name="submit" value="Modify Users"> 
									</form>	
									<form action="?modify_products" method="post">
												<input type="hidden" name="action" value="modify_products">
												<input type="submit" name="submit" value="Modify Products"> 
									</form>	
								</center></p>
							</div>
						</div>';
					break;
						
                case 'modify_users': //modifying users.  
				
					echo  //disable the modify user button
						'<div class="container">    
							<div class="row">
								<center><p>
								<h3> Admin Control Panel: </h3>
									<form action="?modify_users" method="post">
												<input type="hidden" name="action" value="modify_users">
												<input type="submit" name="submit" value="Modify Users" disabled> 
									</form>	
									<form action="?modify_products" method="post">
												<input type="hidden" name="action" value="modify_products">
												<input type="submit" name="submit" value="Modify Products"> 
									</form>	
								</center></p>
							</div>
						</div>';
						
					
					echo '<h3> User List: </h3>'; //for each existing user, show their data and a button to select them for modification
					
					foreach ($users as $user):
						$userid = $user['userID'];
						$username = $user['username'];
						$email = $user['email'];
						$firstName = $user['firstName'];
						$lastName = $user['lastName'];
						$country = $user['country'];
						$dateofBirth = $user['dateofBirth'];
						$format_dob = strtotime( $dateofBirth );
						$dateofBirth2 = date( 'm/d/Y', $format_dob );
						
						$admin = $user['admin'];
						if ($admin == "1") {
							$admin = "Yes";
						} else if ($admin == "0" || $admin == NULL || empty($admin)) {
							$admin = "No";
						}
						
						//on button click, pass along that user's data to the next page for modification
						echo '<form action="user_change.php?userID='. $userid .'" method="post">
								<table>
								  <tr>
									<th>Username:</th>
									<th>'. $username .'</th>
								  </tr>
								  <tr>
									<th>Admin:</th>
									<th>'. $admin .'</th>
								  </tr>
								  <tr>
									<th>Email:</th>
									<th>'. $email .'</th>
								  </tr>
								  <tr>
									<th>First Name:</th>
									<th>'. $firstName .'</th>
								  </tr>
								  <tr>
									<th>Last Name:</th>
									<th>'. $lastName .'</th>
								  </tr>
								  <tr>
									<th>Date of Birth:</th>
									<th>'. $dateofBirth2 .'</th>
								  </tr>
								  <tr>
									<th>Country:</th>
									<th>'. $country .'</th>
								  </tr>
								 </table>
									<input type="hidden" name="action" value="'. $userid .'">
									<input type="submit" value="Modify \''. $username .'\'">
								</form><br><br>';
						
					endforeach;  
					break;	
						
                case 'modify_products': //modifying products.  
				
					echo    //disable the modify product button
						'<div class="container">    
							<div class="row">
								<center><p>	
								<h3> Admin Control Panel: </h3>
									<form action="?modify_users" method="post">
												<input type="hidden" name="action" value="modify_users">
												<input type="submit" name="submit" value="Modify Users"> 
									</form>	
									<form action="?modify_products" method="post">
												<input type="hidden" name="action" value="modify_products">
												<input type="submit" name="submit" value="Modify Products" disabled> 
									</form>	<br>
									<form action="?add_product" method="post">
												<input type="hidden" name="action" value="add_product">
												<input type="submit" name="submit" value="Add Product"> 
									</form>	
								</center></p>
							</div>
						</div>';
						
					echo '<h3> Product List: </h3>'; //for each existing product, show its data and a button to select it for modification
					
					foreach ($result as $products):
						$pid = $products['productID'];
						$pcode = $products['productCode'];
						$pname = $products['productName'];
						$pdescription = $products['productDescription'];
						$pprice = $products['productPrice'];
						$pdiscount = $products['productDiscount'];
						
						//on button click, pass along the product data to the next page for modification
						echo '<form action="product_change.php?productID='. $pid .'" method="post">
								<table>
								  <tr>
									<th>Product Name:</th>
									<th>'. $pname .'</th>
								  </tr>
								  <tr>
									<th>Product Code:</th>
									<th>'. $pcode .'</th>
								  </tr>
								  <tr>
									<th>Product Description:</th>
									<th>'. $pdescription .'</th>
								  </tr>
								  <tr>
									<th>Product Price:</th>
									<th>$'. number_format($pprice, 2) .'</th>
								  </tr>
								  <tr>
									<th>Product Discount:</th>
									<th>'. $pdiscount .'%</th>
								  </tr>
								 </table>
									<input type="hidden" name="action" value="'. $pid .'">
									<input type="submit" value="Modify \''. $pname .'\'">
								</form><br><br>';
						
					endforeach; 
					
					break; 
					
				case 'add_product': // Adding a new product	
						
						echo '
							<center><h3> Add Product: </h3>
								<form action="?submit_product" method="post">
								<table>
								  <tr>
									<th>Product Code:</th>
									<th><input type="text" name="productCode" placeholder="productCode" autofocus="autofocus" required></th>
								  </tr>
								  <tr>
									<th>Product Name:</th>
									<th><input type="text" name="productName" placeholder="productName" required></th>
								  </tr>
								  <tr>
									<th>Product Description:</th>
									<th><input type="text" name="productDescription" placeholder="productDescription" required></th>
								  </tr>
								  <tr>
									<th>Product Price:</th>
									<th><input type="number" step=".01" name="productPrice" placeholder="productPrice" required></th>
								  </tr>
								  <tr>
									<th>Product Discount:</th>
									<th><input type="number" step="1" name="productDiscount" placeholder="productDiscount" required></th>
								  </tr>
								</table><br>					
									<input type="hidden" name="action" value="submit_product">
									<input type="submit" name="submit" value="Add Product">  
									
									<button type="cancel" onclick="window.location=\'admin.php\';return false;">Cancel</button>
								</form>	</center>';
						
						break;
					
				case 'submit_product': //submitting the new product to the database
				
					//getting the data from the form		
					$productCode = filter_input(INPUT_POST, 'productCode');
					$productName = filter_input(INPUT_POST, 'productName'); 					
					$productDescription = filter_input(INPUT_POST, 'productDescription');	
					$productPrice = filter_input(INPUT_POST, 'productPrice'); 				
					$productDiscount = filter_input(INPUT_POST, 'productDiscount');	

					//passing along the data to the add_product function
					add_product($productCode, $productName, $productDescription, $productPrice, $productDiscount);
					
					Header('Location: admin.php');
					break;
					
				case 'delete_product':  //deleting the product
				
					//getting the product id from the button
					$del_productid = filter_input(INPUT_POST, 'pid'); 

					//passing along the product id to the delete_product function.  no turning back.
					delete_product($del_productid);
					
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