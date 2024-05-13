<?php

include "../lib/php/functions.php";


$empty_product = (object)[

"name"=>"",
"description"=>"",
"price"=>"",
"category"=>"",
"thumbnail"=>"",
"images"=>"",
"quantity"=>""
];


//TEMPLATES

function productListItem($r,$o) {

return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>;
HTML;	
}

function showProductPage($o) {
	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."img src='/images/store/$o'>";});
	//heredoc
		$display = <<<HTML

		<div>
		<h2>$o->name</h2>
		<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
		</div>

		<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
		</div>

		<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
		</div>
	
		<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="images-thumbs"><img src='../img/store/$o->thumbnail'></span>
		</div>

		<div class="form-control">

		<label class="form-label">Other Images</label>
		<span class="images-thumbs">$images</span>
		</div>
		HTML;
		$form = <<<HTML

		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">
		<h2>$addoredit User </h2>

		<div class="form-control">
			<label class="form-label" for="user-name">Name</label>
			<input class="form-input" name="user-name" id="user-name" type="text" value="$o->name" placeholder="Enter the Product Name">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-type">Type</label>
			<input class="form-input" name="user-type" id="user-type" type="text" value="$o->type" placeholder="Enter the Product Type">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-email">Email</label>
			<input class="form-input" name="user-email" id="user-email" type="text" value="$o->email" placeholder="Enter the Product Email">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-classes">Images</label>
			<input class="form-input" name="user-classes" id="user-classes" type="text" value="$images" placeholder="Enter the Product Classes, comma separated">   
		</div>

		<div class="form-button">
			<input class="form-button" type="submit" value="Save Changes">

			</div>
		</form>

		HTML; 


$output = $id == "new" ? "<div class='card soft'><$form</div>" :

	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>

		</div>

		";

	$delete = $id =="new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

	echo <<<HTML

		<div class="card soft">
		<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
		</nav>

		$output

		HTML;

	}

	?><!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>
<?php include "../parts/meta.php"; ?>

</head>
<body>

	<header class="navbar">
		
		<div class="container display-flex">

			<div class="flex-none">

			<h1>Product Admin</h1>

		</div>

			<div class="flex-stretch"></div>
			<div class="nav nav-flex flex-none">

				<ul>

					<li><a href="<?=$_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href= "<?=$_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>

				</ul>

			</nav>

		</div>
	</header>


<div class="Container">

	<?php



		if(isset($_GET['id'])) {

			showProductPage(
				$_GET['id']=="new" ?
				$empty_product :
				 makeQuery(makeConn(),"SELECT * FROM products WHERE `id`=".$_GET['id'])[0]);

			//showProductPage();

		} else {

		?>

		<h2>Product List</h2>
		<div class="card soft">
		<?php

		$result = makeQuery(makeConn(),"SELECT * FROM products");

		echo array_reduce($result,'ProductListItem');

		?>
	</div>

<?php } ?>
	

</div>


</body>