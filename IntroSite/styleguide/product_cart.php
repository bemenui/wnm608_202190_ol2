<?php

		include_once "../lib/php/functions.php";

		
		include_once "../parts/templates.php";



//$cart = makeQuery(makeConn(),"SELECT * FROM products WHERE id IN (1,2,3)");

$cart_items = getCartItems(); 


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	


	<title>Cart Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
	

<body>

	<?php include "../parts/navbar2.php"; ?>

	<div class="container">

		<h2>In Your Cart</h2>

		<div class="grid gap">

			<div class="col-xs-12 col-md-7">

				<div class="card soft">

					<?= array_reduce($cart_items,'cartListTemplate') ?>

			</div>
		</div>
			<div class="col-xs-12 col-md-5">

				<div class="card soft flat">

					<?= cartTotals() ?>


					<a href="styleguide/product_checkout.php" class="form-button">Checkout</a>

				</div>
			</div>
		</div>
	</div>
	
</body>
</html>