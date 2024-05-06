<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


</head>
<body>

	<?php include "parts/navbar.php"; ?>


<div class="Container">

	<div class="card soft">

		<h2>Product List</h2>

		<div class="form-control">
			
			<form class="hotdog light" id="product-search">

				<input type="search" placeholder="search products">

			</form>
		</div>
		<div class="form-control">

			<div class="card soft">

			<div class="display-flex">
				<div class="flex-stretch">


			<div class="flex-stretch display-flex">

				<button data-filter="category" data-value="" type="button" class="form-button">All</button>

			</div>

			<div class="flex-stretch">
				<button data-filter="category" data-value="flowers" type="button" class="form-button">flowers</button>

			</div>

				<div class="flex-stretch">
				<button data-filter="category" data-value="moss" type="button" class="form-button">moss</button>

			</div>
		</div>

				<div class="flex-none">
				<div class="form-select">

					<select class="js-sort">

						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						
					</select>
				</div>
			</div>
			</div>
		</div>
	</div>
		
		<div class='productlist grid gap'></div>


</div>


	
</body>
</html>


	
</body>
</html>

