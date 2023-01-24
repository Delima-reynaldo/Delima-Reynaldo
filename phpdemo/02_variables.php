<?php


// Variables & Data Types
// PHP Data Types


// -string - A string is a series of characters sorrounded  by quotes
// -Integer - Whole numbers
// -Float - Decimal numbers
// -boolean - true or false
// -Array - An array is a special variable, which can hold more than one value
// -Object - A class
// -NULL - Empty variable
// -Resource - A special varialble that holds a resource

// ------- Variables Rules ---------
// -Variables must be prefixed with $
// -Variables must start with a letter or the underscore character
// -Variables can't start with a number
// -Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, am)
// -Variables are case-sensitive ($name and $NAME are two different variables)


$fname = 'Reyn'; //String can be single or double quotes
$age = 41; //integer
$haskids = False; //Boolean
// $cashOnHand = 10; //float

// echo "$fname is $age years old";
// echo $haskids;
// var_dump($haskids);
// echo $cashOnHand;
// var_dump($cashOnHand);

//This will not work
// echo '$fname is $age years old';

//concatenate strings
// echo "$fname is $age years old";
// echo "<br>";
echo $fname . ' is ' . $age . ' years old';
// echo nl2br("\n$fname is $age years old");


//Arithmetic Operators
echo "<br>";

echo '5' + '5';
$x = '5' + '5';
echo "<br>";
echo $x;
echo "<br>";
var_dump($x);
echo "<br>";
echo 5 + 5;

echo "<br>";
echo 10 -6;

echo "<br>";
echo 95 * 95;

echo "<br>";
echo 500 / 25;

//Constant -Cannot be changed

echo "<br>";
define('HOST', ' localhost');
define('DB_NAME', 'dev-db');
var_dump(HOST);


?>