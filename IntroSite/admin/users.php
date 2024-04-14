<?php

include "../lib/php/functions.php";


$filename = "../data/users.json";

$users = file_get_json($filename);

//file_put_contents json_encode  explode $_POST

//how to make an html form



if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":

	$users[$_GET['id']]->name= $_POST['user-name'];
	$users[$_GET['id']]->type= $_POST['user-type'];
	$users[$_GET['id']]->email= $_POST['user-email'];
	$users[$_GET['id']]->classes= explode(",", $_POST['user-classes']);

	file_put_contents($filename,json_encode($users));

	header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	break;

	case "create":
		break;

		case "delete":
		break;



	}

}



if(isset($_POST['user-name'])) {

	$users[$_GET['id']]->name= $_POST['user-name'];
	$users[$_GET['id']]->type= $_POST['user-type'];
	$users[$_GET['id']]->email= $_POST['user-email'];
	$users[$_GET['id']]->classes= explode(",", $_POST['user-classes']);

	file_put_contents($filename,json_encode($users));


}


function showUserPage($user) {

	$id = $_GET['id'];

	$classes = implode(", ", $user->classes);
	//heredoc
		echo <<<HTML

		<nav class="nav nav-crumbs">

			<ul>
				<li><a href="admin/users.php">Back</a></li>


			</ul>

		</nav>



		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">

		<div class="form-control">
			<label class="form-label" for="user-name">Name</label>
			<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the User Name">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-type">Type</label>
			<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the User Type">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-email">Email</label>
			<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter the User Email">
		</div>

		<div class="form-control">
			<label class="form-label" for="user-classes">Classes</label>
			<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter the User Classes">   
		</div>

		<div class="form-button">
			<input class="form-button" type="submit" value="Save Changes">

			</div>
		</form>

		HTML; 

	}





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>
<?php include "../parts/meta.php"; ?>

</head>
<body>

	<header class="navbar">
		
		<div class="container display-flex">

			<div class="flex-none">

			<h1>User Admin</h1>

		</div>

			<div class="flex-stretch"></div>
			<div class="nav nav-flex flex-none">

				<ul>

					<li><a href="admin/users.php">User List</a></li>

				</ul>

			</nav>

		</div>
	</header>



<div class="Container">


	<div class="card soft">

		<?php

		if(isset($_GET['id'])) {

			showUserPage($users[$_GET['id']]);

		} else {

		?>

		<h2>Users List</h2>

		<nav class="nav">

			<ul>

		<?php

		for($i=0;$i<count($users);$i++){

			echo "<li>

			<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>

			</li>";

}


		}




		
		?>

	</ul>
</nav>

	<?php





	 ?>

	</div>
</div>

	
</body>
</html>