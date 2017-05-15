<?php
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
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>


<div class="container">    
  <div class="row">
	<p>	
    
    	<?php 
		
			//if there is a product id specified in the url
			if (strpos($url,'product_id') !== false) :
			
				//get the product ID from the url, subtracting 1 to account for array starting at 0
				$product_id = (ltrim(strstr($url, 'product_id='), 'product_id=') - 1);
				
				//assign the good stuff
				$product_name = $result[''.$product_id.'']['productName'];
				$product_code = $result[''.$product_id.'']['productCode'];
				$list_price = $result[''.$product_id.'']['productPrice'];
				$discount_percent = $result[''.$product_id.'']['productDiscount'];
				$description = $result[''.$product_id.'']['productDescription'];
				
				// calculate post-discount price
				$discount_amount = round($list_price * ($discount_percent / 100.0), 2);   
				$unit_price = $list_price - $discount_amount;
				
				?>
				<center>
                <table>		
					<tr>
						<td class="product_image_column" style="padding:0 15px 0 15px;">
								<img src="img/<?php echo $product_code; ?>.jpg" class="img-responsive" style="width:100%" 
								title="'. $product_name .'" alt="Image">
						</td>
						<td>
							<p>
								<?php echo $product_name ?> 
							</p>
							<p> 
							<?php if ($discount_percent > 0) :  // if there is a discount on the item, show the original price and the discount percentage ?>
								 <b>Original price:</b> $<?php echo number_format($list_price, 2); ?> <b>Discount:</b> <?php echo number_format($discount_percent, 0) . '%'; ?>
								</p><p>
							<?php endif; // otherwise, just show the price of the item?>
								<b>Your price:</b> $<?php echo number_format($unit_price, 2); ?></p><p><?php echo $description; ?>
						</p>
						</td>
					</tr>
				</table>
                </center> 
                
                <div align="center">
                    <form action="cart.php" method="get" 
                          id="add_to_cart_form">
                        <input type="hidden" name="action" value="add" />
                        <b>Quantity:</b>&nbsp;
                        <input type="text" name="quantity" value="1" size="2" />
                        <input type="submit" value="Add to Cart" />
                        <input type="hidden" name="product_id"
                               value="<?php echo $product_id; ?>" />
                        <input type="hidden" name="product_name"
                               value="<?php echo $product_name; ?>" />
                        <input type="hidden" name="product_price"
                               value="<?php echo $unit_price; ?>" />
                    </form>
                </div>
				
		<?php else : // a product id is specified in the url ?>	
            
            <table>		
            <?php foreach ($result as $results) : // parse through the array and perform the following for each returned item 
                // assign product data from database
                $list_price = $results['productPrice'];
                $discount_percent = $results['productDiscount'];
                $description = $results['productDescription'];
                
                // calculate post-discount price
                $discount_amount = round($list_price * ($discount_percent / 100.0), 2);   
                $unit_price = $list_price - $discount_amount;
            ?> 
                <tr>
                    <td class="product_image_column" style="padding:0 15px 0 15px;">
                        <a href="?product_id=<?php echo $results['productID']; ?>">
                            <img src="img/<?php echo $results['productCode']; ?>.jpg" class="img-responsive" style="width:100%" 
                            title="<?php echo $results['productName']; ?>" alt="Image">
                        </a>
                    </td>
                    <td>
                        <p>
                            <a href="?product_id=<?php echo $results['productID']; ?>" style="color: #555; background: #ffc;">
                                <?php echo htmlspecialchars($results['productName']); ?>
                            </a>
                        </p>
                        <p>
                        <?php if ($discount_percent > 0) : // if there is a discount on the item, show the original price and the discount percentage?>
                            <b>Original price:</b>
                            $<?php echo number_format($list_price, 2);  // echo the initial price pre-discount ?>
                            <b>Discount:</b>
                            <?php echo number_format($discount_percent, 0); // echo the discount percentage ?>%
                            </p>
                            <p>
                        <?php endif; // otherwise, just show the price of the item?>
                            <b>Your price:</b>
                            $<?php echo number_format($unit_price, 2); // echo the final price?>
                        </p>
                        <p>
                            <?php echo $description; ?>
                        </p>
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>   
		<?php 
			endif;; 
		?>
	</p>
  </div>
</div>

<?php include 'view/footer.php'; // include the footer ?>