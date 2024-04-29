<?php

		include_once "lib/php/functions.php";
		

$product = makeQuery(makeConn(),"SELECT * FROM products WHERE id =".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){

	return $r. "<img src='/img/$o'>"''

});

print_p($product);



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>
<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>





<div class="Container">

	<div class="grid gap">
	<div class="col-xs-12 col-md-7">
		<div class="card soft">

			<div class="images-main">

			<img src="img/<?= $product->thumbnail ?>">

	</div>

	<div class="images-thumbs">


	</div>
</div>

</div>

	<div class="col-xs-12 col-md-5">

		<div class="card soft">
			
			<h2 class="product-name"><?= $product->name ?></h2>

			<div class="product-price">&dollar;<?= $product->price ?></div>


		</div>

	</div>
	</div>

	</div>

	
</body>
</html>