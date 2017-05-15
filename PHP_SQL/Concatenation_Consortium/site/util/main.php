<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php
// database errors
function display_db_error($error_message) {
    include 'errors/db_error.php';
    exit;
}

// other errors
function display_error($error_message) {
    include 'errors/error.php';
    exit;
}

// store user and cart data
session_start();
?>
