<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php
// Set up the database connection

$dsn = 'mysql:host=localhost;dbname=Concatenation_Consortium';
$username = 'username';
$password = 'password';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>