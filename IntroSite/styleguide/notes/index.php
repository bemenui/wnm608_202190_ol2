<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Document</title>
</head>
<body>

	<?php 

	echo "<div> Hello world </div>";

	echo "<div> Goodbye world </div>";


	//variables//
	$a = 5;


	echo $a;


	//string interpolation//

	echo "<div> I have $a things</div>";
	echo '<div> I have $a things</div>';



	//number
	//integer

	$b = 15;

//Float
	$b = 0.576;

	$b = 10;


	//string = quotation marks

	$name = "Yerguy2";

	//Boolean

	$isOn = true;




	// Math
	// PEMDAS

	echo (5 - 4) * 2;

	// Concatenation 

	echo "<div>b + a" . " = c</div>";


	echo "<div>$b + $a = ".($a+$b)."</div>";


	 ?>

	 <hr>

	 <div>This is my name</div>

	 <div>

	 	<?php

	 	$firstname = "Brittney";

	 	$lastname = "Mendoza";

	 	$fullname = "$firstname $lastname";

	 	echo $fullname;

	 	?>

	 	<hr>

	 	<?php

	 	//superglobal
	 	//?name=Brittney&type=textarea

	 	echo "<a href='?name=Brittney&type=textarea'>visit</a>";

	 	echo "<div>My name is {$_GET['name']}</div>";

	 	//?name=Brittney&type=textarea

	 	echo "<a href='?name=Brittney&type=textarea'>visit</a>";

	 	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	 	?>

	 	<hr>
	 	<?php

	 	//Array

	 	$colors = array("red","green","blue");


	 	echo $colors[2];

	 	echo "

	 		<br>$colors[0]
	 		<br>$colors[1]
	 		<br>$colors[2]
	 	";

	 	echo count($colors);


	 	?>


	 	<div style="color:<?= $colors[1] ?>">

	 		This text is green

	 	</div>

	 	<hr>

	 	<?php

	 	//Associative Array

	 	$colorsAssociative = [

	 		"red" => "#f00",
	 		"green" => "#0f0",
	 		"blue" => "#00f"

	 	];

	 	echo $colorsAssociative['green'];


	 	?>

	 	<hr>

	 <?php

	 // casting

	 $c = "$a";
	 $d = $c*1;

	 $colorsObject = (object)$colorsAssociative;

	 // echo $colorsObject

	 echo "<hr>";

	 //Array Index Notation

	 echo $colors[0]."<br>";

	 echo $colorsAssociative['red']."<hr>";

	 echo $colorsAssociative[$colors[0]]."</br>";

	 //object property notation

	 echo $colorsObject->red."<br>";

	 echo $colorsObject->{$colors[0]}."<br>";




	 ?>

	 <hr>

	 <?php

	 print_r($colors);

	 echo "<hr>";

	 print_r($colorsAssociative);

	 echo "<hr>";

	 echo "<pre>",print_r($colorsObject),"</pre>";


	 //Function


	 function print_p($v) {

	 	 echo "<pre>",print_r($v),"</pre>";
	 }

	 	print_p($_GET);

	 ?>
	
</body>
</html>