<?php
	#Project:  Concatenation_Consortium
	#Author: Seth Creason
	#Date: 4.29.2017
?>
	<style> 
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: auto;
	}
	
	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}
	
	tr:nth-child(even) {
		background-color: #dddddd;
	}
	</style> 
    <center><br>
    <h3>Your Cart</h3>
    <?php if (!isset($_SESSION['cart']['totalItems']) || ($_SESSION['cart']['totalItems'] <= "0")) : // if there's nothing in the cart (or a negative value)  ?>
        <p>There are no products in your cart.</p>
    <?php elseif (isset($_SESSION['cart']['cartTotal']) && ($_SESSION['cart']['cartTotal'] > "0")) : // otherwise, if there is something in the cart ?>
    <table>
    <?php foreach ($_SESSION['cart']['productInfo']['productName'] as $key => $items):  //for each specific item, show its name and quantity
            if ($items['quantity'] > "0") :
            ?>
                <tr>
                    <th>Item:</th>
                    <th><?php 
                              echo $key; ?></th>
                </tr>
                    <th>Quantity:</th>
                    <th><?php echo $items['quantity']; ?></th>
                </tr>
                </tr>
                    <th colspan="2">
                    <center>
                    <form action="cart.php" method="get">
                        <input type="hidden" name="action" value="update_item" />
                            <input type="hidden" name="product_name"
                                   value="<?php echo $key; ?>" />
                            <input type="text" name="quantity" value="<?php echo $items['quantity']; ?>" size="2" />
                        <input type="submit" value="Update Quantity" />
                    </form>
                    </center>
                    </th>
                </tr>
                </tr>
                    <th colspan="2">
                    <center>
                    <form action="cart.php" method="get">
                        <input type="hidden" name="action" value="remove_item" />
                            <input type="hidden" name="product_name"
                                   value="<?php echo $key; ?>" />
                            <input type="hidden" name="product_quantity"
                                   value="<?php echo $items['quantity']; ?>" />
                        <input type="submit" value="Remove" />
                    </form>
                    </center>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                    </th>
                </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    
    <?php if (isset($_SESSION['cart']['totalItems']) && ($_SESSION['cart']['totalItems'] > "0")) : // if the cart is populated, show the total items and cost ?>
            <tr>
                <th>Items in Cart:</th>
                <th><?php echo $_SESSION['cart']['totalItems']; ?></th>
            </tr>
                <th>Cart Total:</th>
                <th>$<?php echo number_format($_SESSION['cart']['cartTotal'], 2); ?></th>
            </tr>
            </tr>
                <th colspan="2">
                <center>
                <form style="float:left" action="cart.php" method="get" 
                      id="empty_cart">
                    <input type="hidden" name="action" value="empty_cart" />
                    <input type="submit" value="Empty Cart" />
                </form>
                <form action="cart.php" method="get" 
                      id="checkout">
                    <input type="hidden" name="action" value="checkout" />
                    <input type="submit" value="Checkout" />
                </form>
                </center>
                </th>
            </tr>
            </table><br>
    <?php endif; ?>
            </center><br><br><br><br>
    <?php endif; ?>