<?php session_start(); ?>
<h2>Login</h2>
<form action="." method="post">
<input type="hidden" name="action" value="login"> 
<input id="name" name="uname" placeholder="username" type="text">
<input id="password" name="pword" placeholder="password" type="password">
<input name="submit" type="submit" value=" Login ">
<!-- <br><br><a href="pwreset.php">Forgot Password?</a> -->
<span><?php echo "<br><br>" . $error; ?></span>
</form>
