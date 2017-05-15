<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php
//end the session

session_start();
session_destroy();
header("Location: index.php");
?>