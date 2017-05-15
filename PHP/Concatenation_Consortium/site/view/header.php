<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php
ob_start(); //I found this to be necessary for proper site functionality on ButlerCCWebDev.  It was not necessary in my local environment.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Concatenation Consortium</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      margin-left: 350px;
	  margin-right: 350px;
      border-radius: 30px;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	</style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Concatenation Consortium</h1>      
    <p>PHP-eCommerce Made Easy</p>
  </div>
</div>
<?php include 'nav.php'; ?>
