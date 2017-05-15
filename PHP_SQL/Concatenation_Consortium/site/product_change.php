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
//get the product ID from the url, stripping everything except numbers
$pid = preg_replace("/\D/", "", $action);

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
						
                case ''.$pid.'':  //the product ID
			
					//get the product data, assign it to the modify array
					try {
						$query = "SELECT * FROM products WHERE productID=:productID";
						$statement = $db->prepare($query);
						$statement->bindParam(':productID', $pid);
						$statement->execute();
						$modify = $statement->fetchAll();
						$statement->closeCursor();
					} catch (PDOException $e) {
						$error_message = $e->getMessage();
						display_db_error($error_message);
					}
					
					//parse through the array, assign the good stuff
					$productID = $modify['0']['productID'];
					$productCode = $modify['0']['productCode'];
					$productName = $modify['0']['productName'];
					$productDescription = $modify['0']['productDescription'];
					$productPrice = $modify['0']['productPrice'];
					$productDiscount = $modify['0']['productDiscount'];
							
					echo '<h3> Modify Product: </h3>';	
						
					//show a form with modifiable fields, with the existing product data as the current values
					echo '<form action="?submit_change" method="post">
							<table>
							  <tr>
								<th>Product Name:</th>
								<th><input type="text" autofocus="autofocus" name="pname" value="'. $productName .'" required>
									<input type="hidden" name="pid" value="'. $productID .'"></th>
							  </tr>
							  <tr>
								<th>Product Code:</th>
								<th><input type="text" name="pcode" value="'. $productCode .'" required></th>
							  </tr>
							  <tr>
								<th>Product Description:</th>
								<th><input type="text" name="pdescription" value="'. $productDescription .'" required></th>
							  </tr>
							  <tr>
								<th>Product Price:</th>
								<th><input type="number" step=".01" name="pprice" value="'. $productPrice .'" required></th>
							  </tr>
							  <tr>
								<th>Product Discount:</th>
								<th><input type="number" step="1" name="pdiscount" value="'. $productDiscount .'" required></th>
							  </tr>
							 </table><br>
								<input type="hidden" name="action" value="submit_change">
								<input type="submit" value="Submit Changes for '. $productName .'">
								<button type="cancel" onclick="window.location=\'admin.php?modify_products\';return false;">Cancel</button>
							</form><br>
							<form action="?delete_product" method="post">
										<input type="hidden" name="action" value="delete_product">
										<input type="hidden" name="pid" value="'. $productID .'">
										<input type="submit" style="background-color:red;color:white;" onclick="return confirm(\'Are you sure you want to delete the following product:\n\n'. $productName . '\n\nWARNING:  This action can not be undone.\')" name="submit" value="Delete '. $productName .'"> 
							</form>	';
					
					break; 
					
				case 'submit_change': //submitting the modifications made above
				
					//getting the data from the form
					$change_pid = filter_input(INPUT_POST, 'pid');; 			
					$change_pcode = filter_input(INPUT_POST, 'pcode');
					$change_pname = filter_input(INPUT_POST, 'pname'); 					
					$change_pdescription = filter_input(INPUT_POST, 'pdescription');	
					$change_pprice = filter_input(INPUT_POST, 'pprice'); 				
					$change_pdiscount = filter_input(INPUT_POST, 'pdiscount');	

					//passing along the data to the update_product function
					update_product($change_pid, $change_pcode, $change_pname, $change_pdescription, $change_pprice, $change_pdiscount);
					
					Header('Location: products.php');
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