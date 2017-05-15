<?php //echo 'Current PHP version: ' . phpversion();
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
?>
<div class="container">    
  <div class="row">
  
	<p>	
    
		<?php
		
        $then_date = new DateTime('2017-01-17'); //create old date object
        $now_date = new DateTime('now', new DateTimeZone('America/Chicago')); //create current date object 
        $date_diff = date_diff($then_date, $now_date); //calculate the difference between the two
		
		echo 'Concatenation Consortium has been providing affordable PHP items to the public since ' . $then_date->format('F jS\, Y') . '.  ' /* format the old date object as Month, day, year */ . 
		'That\'s ' . $date_diff->format('%a') /* format the difference date object as number of days only */ . ' days of uninterupted quality service.<br><br>'; 
		
		echo 'We have an awesome selection of PHP related items such as round brackets, curly brackets, and square brackets -- and we\'re always adding more, so check back often!<br><br>Take advantage of the special promotions going on right now (listed below), or check out our <a href="products.php">entire inventory</a>!<br>';
		
		?>
	</p>
            
    
  </div>
</div><br>
<div class="container">    
 <center><h2>Current Promotions:</h2></center>
  <div class="row">
		<?php 
			
			foreach ($result as $results) : // parse through the array and perform the following for each returned item 
		
				$promo_date1 = new DateTime('now', new DateTimeZone('America/Chicago')); //current date object for promotion1
				$rand1 = mt_rand(1,10); //generate a random number between 1 and 10
				$promo_rand1 = $promo_date1->add(new DateInterval('P' . $rand1 . 'D')); //add the first randomly generated number of days to the current date for promotion1
			
				if ($results['productDiscount'] > 0) :  // if there is an active discount on the item in the database, display product info as follows: ?>
    <a style="color:#000000" href="products.php?product_id=<?php echo $results['productID']; ?>">             
    <div class="col-sm-4">
        <div class="panel-footer"><center><?php echo $results['productName'] . '\'s are ' . $results['productDiscount'] . '% off!' ; ?></center></div>
        	<div class="panel-body"><img src="img/<?php echo $results['productCode']; ?>.jpg" class="img-responsive" style="width:100%" title="<?php echo $results['productName']; ?>" alt="Image"></div>
      		<div class="panel panel-<?php // if $rand1 is 1 or 2, red background.  if 3, 4, or 5, yellow background.  otherwise, green background.
	  								switch($rand1):
										case 1:
										case 2:
											echo 'danger';
											break;
										case 3:
										case 4:
										case 5:
											echo 'warning';
											break;
										default:
											echo 'success';
											break;
									endswitch;
	  						  ?>">
        	<div class="panel-heading"><?php echo '<center>DEAL ENDS ON ' . $promo_rand1->format('m/d/Y'); // promo end date displayed as month/day/year ?>
        </div>
      </div>
    </div>
    </a>
                                
		<?php endif;	
	 		endforeach;
		?>
  </div>
</div>

<?php include 'view/footer.php'; // include the footer ?>