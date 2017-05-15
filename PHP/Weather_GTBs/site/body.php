<?php
session_start();
ob_start();
require 'functions.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dispatch Assistant</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<header><h1>Dispatch Assistant</h1> <?php if (!isset($_SESSION['login_user'])) { Header('Location: index.php'); } 
				else { echo '<br><br>Currently  logged in as ' . $_SESSION['login_user'] . '  || <a href="logout.php">Logout</a><br><br>';}   ?> </header>
<main><br>
<aside>
        <!-- display list of territories -->
        <h2>Territories</h2>
        <nav>
        <ul> 
            <?php foreach ($territories as $territory) : ?>
            <li><a href="body.php?territory_id=<?php echo $territory['TABLE_NAME']; ?>">
                    <?php echo $territory['TABLE_NAME']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>

    <section>
        <!-- display table -->
        <h2><?php echo $territory_id; ?></h2>
        <h2><?php if ($vp == '0') { echo 'Weather | <a href="body.php?territory_id=' . $territory_id . '&vp=1">Bulletins</a>'; } 
				  elseif ($vp == '2') { echo '<a href="body.php?territory_id=' . $territory_id . '&vp=0">Weather</a> | <a href=".?territory_id=' . $territory_id . '&vp=1">Bulletins</a>'; } 
				  else { echo '<a href="body.php?territory_id=' . $territory_id . '&vp=0">Weather</a> | Bulletins'; } ?>
        </h2>
        <?php 
	    if ($vp == '0') { include("weather.php"); } 
            elseif ($vp == '1') { include("gtbs.php"); }
            elseif ($vp == '2') { include("add_ID_form.php"); } 
	    else {echo "Something's wrong."; } 
	?>
    </section>


  
</main>
<footer>
	<p>
	<b>&copy; <?php echo date("Y"); ?> Seth</b><br>
	<?php if ($vp == '0') { echo '<a href="https://darksky.net/poweredby/"><img src="img/poweredby-oneline.png" height="22" width="170" alt="Powered by Dark Sky"></a>'; } ?>
	</p>
</footer>
</body>
</html>