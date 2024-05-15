<?php include_once "./lib/php/functions.php"; 
	  include_once "./parts/templates.php";

?><!DOCTYPE html>

<html lang="en">

<head>

		<meta charset="UTF-8">
		<title>Landing Page</title>

		 <?php include "../parts/meta.php"; ?>

	</head>

	<body>

	<?php include "../parts/navbar.php"; ?>

	<div class="view-window" style="background-image:url('img/stock_plantss.jpeg')">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">

			<div class="card soft">
				Plants

			</div>
		</div>
	</div>

	<div class="container">
		<div class="card hard">
			<h2>Information</h2>
			<p>You'll feel like a plant expert!</p>

		</div>
	</div>
	<div class="container">
		
<h2>Latest Plants</h2>
		<?php recommendedCategory("plant"); ?>

<h2>Latest Flowers</h2>

		<?php recommendedCategory("flower"); ?>
		
	</div>
</body>
</html>