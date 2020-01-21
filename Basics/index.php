<?php 

//You can do a simple hello world with echo.

echo "Hello World";

//Declare variables in PHP you don't need declare type.
$name = "Ricardo";
$age = 24;
$handsome = true; 

//You can show in the screen using echo.
//Note: You can combine HMTL with PHP.

echo "<li>Name: $name</li>".
     "<li>Age: $age</li>".
     "<li>Is he handsome? (1->true, 0->false): $handsome</li>";

//Note: You only can put the variables in " " case in ' ' case yo need to use the concatenation with the dot (.)


//Use defined variables.
define('nombre','Richard Cuell');
echo '<h1>'. nombre .'</h1> '; //Here we use de defined variable

//Predefinited constansts

echo PHP_OS;

?>

