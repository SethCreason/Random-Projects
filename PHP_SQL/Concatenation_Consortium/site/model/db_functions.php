<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php
include "database.php";

// This is to get all products from the database, and assign the array to 'result'.  
try {
	$query = 'SELECT * FROM products';
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	display_db_error($error_message);
}	

// This is to get all users from the database, and assign the array to 'users'.
try {
	$query = 'SELECT * FROM users';
	$statement = $db->prepare($query);
	$statement->execute();
	$users = $statement->fetchAll();
	$statement->closeCursor();
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	display_db_error($error_message);
}	

//  This function is for admin.php, accessible only to administrators.  It takes the modified product data and updates it in the database.			
function update_product($change_pid, $change_pcode, $change_pname, $change_pdescription, $change_pprice, $change_pdiscount)  {
		global $db;
		try {
			$query = "UPDATE products SET productCode=:productCode, 
						productName=:productName, productDescription=:productDescription, 
						productPrice=:productPrice, productDiscount=:productDiscount 
						WHERE productID=:productID";
			$statement = $db->prepare($query);
			$statement->bindParam(':productID', $change_pid);
			$statement->bindParam(':productCode', $change_pcode);
			$statement->bindParam(':productName', $change_pname);
			$statement->bindParam(':productDescription', $change_pdescription);
			$statement->bindParam(':productPrice', $change_pprice);
			$statement->bindParam(':productDiscount', $change_pdiscount);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for account.php, accessible to all users.  It takes the modified user form data provided and attempts to update it in the database.
function update_account($uname, $change_email, $change_firstName, $change_lastName, $change_dob_formatted, $change_country)  {
		global $db;
		try {
			$query = "UPDATE users SET email=:email, firstName=:firstName, lastName=:lastName, dateofBirth=:dob, country=:country WHERE username=:username";
			$statement = $db->prepare($query);
			$statement->bindParam(':username', $uname);
			$statement->bindParam(':email', $change_email);
			$statement->bindParam(':firstName', $change_firstName);
			$statement->bindParam(':lastName', $change_lastName);
			$statement->bindParam(':dob', $change_dob_formatted);
			$statement->bindParam(':country', $change_country);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for account.php, accessible to all users.  It takes the modified user form data provided and attempts to update it in the database.
function update_password($uname, $new_hash_pass)  {
		global $db;
		try {
			$query = "UPDATE users SET password=:password WHERE username=:username";
			$statement = $db->prepare($query);
			$statement->bindParam(':username', $uname);
			$statement->bindParam(':password', $new_hash_pass);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for admin.php, accessible only to administrators.  It takes the modified user data and updates it in the database.
function update_user($change_userid, $change_uadmin, $change_uname, $change_uemail, $change_ufirstName, $change_ulastName, $change_udateofBirth, $change_ucountry)  {
		global $db;
		try {
			$query = "UPDATE users SET admin=:admin,
						username=:username, email=:email, 
						firstName=:firstName, lastName=:lastName,  
						dateofBirth=:dateofBirth, country=:country  
						WHERE userID=:userID";
			$statement = $db->prepare($query);
			$statement->bindParam(':userID', $change_userid);
			$statement->bindParam(':admin', $change_uadmin);
			$statement->bindParam(':username', $change_uname);
			$statement->bindParam(':email', $change_uemail);
			$statement->bindParam(':firstName', $change_ufirstName);
			$statement->bindParam(':lastName', $change_ulastName);
			$statement->bindParam(':dateofBirth', $change_udateofBirth);
			$statement->bindParam(':country', $change_ucountry);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for admin.php, accessible only to administrators.  It deletes the provided user from the database.				
function delete_user($del_userid)  {
		global $db;
		try {
			$query = "DELETE FROM users WHERE userID=:userID";
			$statement = $db->prepare($query);
			$statement->bindParam(':userID', $del_userid);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for admin.php, accessible only to administrators.  It deletes the provided product from the database.				
function delete_product($del_productid)  {
		global $db;
		try {
			$query = "DELETE FROM products WHERE productID=:productID";
			$statement = $db->prepare($query);
			$statement->bindParam(':productID', $del_productid);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
}

//  This function is for register.php, accessible to new users.  It takes the form data provided and attempts to insert it into the database.
//  If the username or email exist in the database already, it kicks back a message saying so.  Otherwise, the
//  standard database error is provided.
function add_user($add_username, $add_hash_pass, $add_email, $add_firstName, $add_lastName, $add_dob_formatted, $add_country)  {
		global $db;
		try {
			$query = "INSERT INTO users (
						username, password, email, 
						firstName, lastName, dateofBirth, country
					  )
					  VALUES (
						:add_user, :add_pass, :add_email, 
						:add_firstName, :add_lastName, :add_dateofBirth, :add_country
					  )";
			$statement = $db->prepare($query);
			$statement->bindParam(':add_user', $add_username);
			$statement->bindParam(':add_pass', $add_hash_pass);
			$statement->bindParam(':add_email', $add_email);
			$statement->bindParam(':add_firstName', $add_firstName);
			$statement->bindParam(':add_lastName', $add_lastName);
			$statement->bindParam(':add_dateofBirth', $add_dob_formatted);
			$statement->bindParam(':add_country', $add_country);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			if (strpos($error_message, "email") !== false) {
				$_SESSION['message'] = 'A user with that e-mail already exists!';
				Header('Location: register.php');
				break;
			} else if (strpos($error_message, "username") !== false) {
				$_SESSION['message'] = 'A user with that username already exists!';
				Header('Location: register.php');
				break;
			} else {
			display_db_error($error_message);
			}
		}
}

//  This function is for admin.php, accessible only to administrators.  It takes the form data provided and attempts to insert it into the database.
//  If the product exists in the database already, it kicks back a message saying so.  Otherwise, the
//  standard database error is provided.
function add_product($productCode, $productName, $productDescription, $productPrice, $productDiscount)  {
		global $db;
		try {
			$query = "INSERT INTO products (
						productCode, productName, productDescription, 
						productPrice, productDiscount
					  )
					  VALUES (
						:productCode, :productName, :productDescription, 
						:productPrice, :productDiscount
					  )";
			$statement = $db->prepare($query);
			$statement->bindParam(':productCode', $productCode);
			$statement->bindParam(':productName', $productName);
			$statement->bindParam(':productDescription', $productDescription);
			$statement->bindParam(':productPrice', $productPrice);
			$statement->bindParam(':productDiscount', $productDiscount);
			$statement->execute();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			if (strpos($error_message, "product") !== false) {
				$_SESSION['message'] = 'A product with that e-mail already exists!';
				Header('Location: admin.php');
				break;
			} else {
			display_db_error($error_message);
			}
		}
}
?>