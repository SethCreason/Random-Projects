<?php
session_start();
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

//get action if there is one
$action = filter_input(INPUT_POST, 'action');

//if not:
if ($action == NULL) {
	//if logged in already,
    if (isset($_SESSION['username'])) {
		//redirect to the user account page
		Header('Location: account.php');
	} else {
		//otherwise, assign action to empty
		$action = 'empty';
	}
}

?>
<!-- This is for the pop-up calendar -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
        $( "#datepicker" ).datepicker();
        } ); 
    </script>
<!-- This is for the pop-up calendar -->
<?php


switch ($action) {
	
	case 'empty': // The default case for the page. 
	
		//If there's an error message, display it
		if (isset($_SESSION['message'])) {
			echo '<center><h3><font color="red">' . $_SESSION['message'] . '</font></h3><br>';
			unset($_SESSION['message']);
		}
		
		// Also display the login field and register button.
		echo '<div class="container">    
				  <div class="row">	
					
					<div align="center">
					<h2>Login:</h2>
					<form action="?login" method="post" id="login_form">
						<input type="hidden" name="action" value="login">
						
						<input type="text" name="username"
							   placeholder="username" autofocus="autofocus" size="30"><br>
				
						<input type="password" name="password" placeholder="password" size="30">
						<span></span><br><br>
				
				
						<input type="submit" value="Login">
							</form><br><br>
				
					<h2>Not a member?</h2>
					<form action="register.php" method="post">
						<input type="hidden" name="action" value="register">
						<input type="submit" value="Register">
					</form>	
					</div>
							
					
				  </div>
			  </div><br>';
		break;
	
	case 'login': //If the user opts to login
	
		$username = filter_input(INPUT_POST, 'username'); //Get username from the form field
        $password = filter_input(INPUT_POST, 'password'); //Get password from the form field
		
		
		//Try checking the username and password against the user database
		try {
			$query = 'SELECT * FROM users WHERE username = :username';
			$statement = $db->prepare($query);
			$statement->bindParam(':username', $username);
			$statement->execute();
			$login = $statement->fetchAll();
			$statement->closeCursor();	
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
		
		/* For debugging use only: 
		/* 
		echo '<pre>';
		print_r ($login);
		echo '</pre>';
		echo $login['0']['username'];
		*/
		
		//Check if the username exists
		if(isset($login['0']['username'])) {
			
			//Check if the proided username	matches the hashed password 
			if ($login['0']['username'] == $username && password_verify($password, $login['0']['password'])) {
				Header('Location: index.php');
					
				//if so, assign the username to the session
				$_SESSION['username'] = $login['0']['username'];
					//is the user an administrator?
					if ($login['0']['admin'] == "1") {
						$_SESSION['admin'] = "1";
					} else {
						$_SESSION['admin'] = "0";
					}
				break;
			} 
		} else {
			//else if the username doesn't exist in the database, kick back a message 
			$_SESSION['message'] = 'Login failed. Invalid username or password.';
			Header('Location: login.php');
			break;
		}
		
        break;
    default:
        break;
}

?>

<?php include 'view/footer.php'; // include the footer ?>