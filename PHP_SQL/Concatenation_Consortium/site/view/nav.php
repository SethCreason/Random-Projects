<?php
//session_start();
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
<?php 

//this gets the name of the current page, used for determining which part of the navbar to activate
$fname = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);  

require_once('util/main.php');
?>
<style>
.logo {
	color:#777;
	float:left;
	height:50px;
	padding:15px 15px;
	font-size:15px;
	line-height:20px
}
.logo:hoover, .logo:focus {
	text-decoration:none
}
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <font class="logo">CC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<?php if ($fname == "index.php") : // if page is index.php, show it as active on the navbar ?>
        <li class="active"><a onclick="return false;" href="#">Home</a></li>
        <li><a href="products.php">Products</a></li>
      	<?php elseif ($fname == "products.php") : // if page is products.php, show it as active on the navbar ?>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a onclick="return false;" href="#">Products</a></li>
        <?php else : // otherwise, show both as inactive ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
        <?php if (isset($_SESSION['username'])) : // If the user is logged in, show a message saying so ?> 
        	<li><font class="logo">Currently logged in as:  <?php echo $_SESSION['username']; ?></font></li>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['username']) && ($_SESSION['admin'] == "1")) : // If the logged in user is an Admin, show the Amdmin link on the navbar ?>     
        	<?php if ($fname == "admin.php") : ?>
        		<li class="active"><a onclick="return false;" href="#"><span class="glyphicon glyphicon-alert"></span> Admin</a></li>
        	<?php else : //otherwise, don't ?>
        		<li><a href="admin.php"><span class="glyphicon glyphicon-alert"></span> Admin</a></li>
        	<?php endif; ?>     
        <?php endif; ?>     
        
		<?php if (!isset($_SESSION['username'])) : // If the user is not logged in, show the Login link on the navbar ?>     
        	<?php if ($fname == "login.php" || $fname == "register.php") : //active if that is the current page ?>
        		<li class="active"><a onclick="return false;" href="#"><span class="glyphicon glyphicon-user"></span> Login/Register</a></li>
        	<?php else : //otherwise, inactive ?>
        		<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login/Register</a></li>
        	<?php endif; ?>     
        <?php endif; ?>
            
        <?php if (isset($_SESSION['username'])) : // If the user is logged in, show a link to their account page and a link to log out ?>
        	<?php if ($fname == "account.php") : //active if that is the current page ?>
        		<li class="active"><a onclick="return false;" href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php else : //otherwise, inactive ?>
        		<li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        	<?php endif; ?>     
		<?php endif; ?>
        
        <?php if (isset($_SESSION['username'])) : // If the user is logged in, show a link to the cart ?>
        	<?php if ($fname == "cart.php") : //active if that is the current page ?>
        		<li class="active"><a onclick="return false;" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
                <?php if (isset($_SESSION['cart']['totalItems']) && ($_SESSION['cart']['totalItems'] > "0")) { echo ' ['. $_SESSION['cart']['totalItems'] .']'; } ?> </a></li>  
            <?php else : //otherwise, inactive ?> 
        		<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
				<?php if (isset($_SESSION['cart']['totalItems']) && ($_SESSION['cart']['totalItems'] > "0")) { echo ' ['. $_SESSION['cart']['totalItems'] .']'; } ?> </a></li> 
        	<?php endif; ?>      
		<?php endif; ?>
      </ul>
    </div>
  </div>
</nav>