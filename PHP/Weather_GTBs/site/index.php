<?php
session_start();
ob_start();
include('functions.php');
//session_unset();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dispatch Assistant</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<header>
<h1>Dispatch Assistant</h1> 
</header>
<main>
    <h1></h1>
  <?php if (!isset($login['username']))  :
		include("login.php"); 
	else : 
		Header('Location: body.php'); 
	endif; 
	?>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Seth.</p>
</footer>
</body>
</html>