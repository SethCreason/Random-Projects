<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php 
//include necessary files
require_once('util/main.php');
require_once('model/database.php');
require_once('model/db_functions.php');
//require_once('model/cart_functions.php');

//get action if there is one
$action = filter_input(INPUT_GET, 'action');

//if not:
if ($action == NULL) {
		$action = 'view';
}

/*
echo '<pre>';
var_dump($_SESSION['cart']);  //debugging
echo '</pre>';
*/

switch ($action) {
		
    case 'view':

		include 'view/header.php'; 
		include 'view/view_cart.php'; // show the cart

        break;
		
		
    case 'add':
		Header('Location:products.php');
		//get the product data
		$product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
		$product_name = filter_input(INPUT_GET, 'product_name');
		$product_price = filter_input(INPUT_GET, 'product_price');
		$quantity = filter_input(INPUT_GET, 'quantity');
		
		//assign the data to session variables
		$_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity'] += $quantity;
		$_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['price'] = $product_price;
		$_SESSION['cart']['totalItems'] += $quantity;
		$_SESSION['cart']['cartTotal'] += ($product_price * $quantity);
		
		include 'view/header.php'; 
		include 'view/view_cart.php'; // show the cart

        break;
		
    case 'update_item': 
	
		//get the update data
		$product_name = filter_input(INPUT_GET, 'product_name');
		$quantity = filter_input(INPUT_GET, 'quantity');
		
		// if the new quantity is less than the old, modify accordingly
		if ($quantity < $_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity']) {
			$diff = abs($quantity - $_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity']);
			$_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity'] = $quantity;
			$_SESSION['cart']['totalItems'] -= $diff;
			$_SESSION['cart']['cartTotal'] -= ($_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['price'] * $diff);
			
			if ($_SESSION['cart']['totalItems'] <= "0"){
				unset($_SESSION['cart']);
			}
			
			include 'view/header.php'; 
			include 'view/view_cart.php'; // show the cart
			
			break;
			
		} else { // modify accordingly
			$diff = abs($quantity - $_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity']);
			$_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity'] = $quantity;
			$_SESSION['cart']['totalItems'] += $diff;
			$_SESSION['cart']['cartTotal'] += ($_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['price'] * $diff);
			
			include 'view/header.php'; 
			include 'view/view_cart.php'; // show the cart
			
			break;
			
		}	
		
    case 'remove_item': 
	
		//get the data
		$product_name = filter_input(INPUT_GET, 'product_name');
		$product_quantity = filter_input(INPUT_GET, 'product_quantity');
		
		//subtract the item's quantity from the total items session variable
		$_SESSION['cart']['totalItems'] -= $product_quantity;
		
		// remove the quantity from the session variable
		unset($_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['quantity']);
		
		// remove the cost from the session variable
		$_SESSION['cart']['cartTotal'] -= ($_SESSION['cart']['productInfo']['productName'][''.$product_name.'']['price'] * $product_quantity);
		
		//if the new item total is less than 0, clear the cart of all data
		if ($_SESSION['cart']['totalItems'] <= "0"){
			unset($_SESSION['cart']);
		}
		
		include 'view/header.php'; 
		include 'view/view_cart.php'; // show the cart
		
		break;
		
    case 'empty_cart': 
	
		//clear the cart.  do not pass go.
		unset($_SESSION['cart']); 
		
		Header('Location:index.php');
		//include 'index.php'; // show the cart
		
		break;
		
    case 'checkout': 
		
		include 'view/header.php'; 
		include 'view/checkout.php'; // show the checkout page
		
		break;
		
    default:
        break;
}

include 'view/footer.php'; // include the footer 
?>