<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>


<div class="Container">

	<div class="card soft">

	


		<h2>Product List</h2>


		<?php

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(), 
			
			"
			SELECT * 
			FROM products

			ORDER BY date_create DESC 

			LIMIT 12
			"

		);

		echo "<div class='productList grid gap'>",array_reduce($result,'productListTemplates'), "</div>";

			?>

</div>
</div>


	
</body>
</html>

