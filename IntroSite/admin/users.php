<?php

include "../lib/php/functions.php";



$users = file_get_json("../data/users.json");

//file_put_contents json_encode  explode $_POST

//how to make an html form



function showUserPage($user) {

	$classes = implode(", ", $user->classes);
	//heredoc
		echo <<<HTML

		<nav class="nav nav-crumbs">

			<ul>
				<li><a href="admin/users.php">Back</a></li>


			</ul>

		</nav>



		<div>

		Name:<input placeholder="Child's name">

		Type: <input placeholder="Sibling type">

		Email: <input placeholder="child@bradyhouse.com">

		<ul>

		<li><a href="admin/index.php">Submit</a></li>

		</ul>



			<h2>$user->name</h2>



		<strong>Type</strong>

		<span>$user->type</span>

		</div>


		<div>

		<strong>Email</strong>

		<span>$user->email</span>

		</div>
		<div>

		<strong>Classes</strong>

		<span>$classes</span>

		</div>

		</div>

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