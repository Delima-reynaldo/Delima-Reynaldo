<?php
// ----------- Array Function ----------




$fruits = ['apple', 'banana', 'orange'];

// Get array length
// echo count($fruits);

//Search Array
// echo in_array('banana', $fruits);
// var_dump(in_array('banana',$fruits));

$fruits[] = 'grape'; //add to the end
array_push($fruits, 'mango', 'raspberry'); //add to the end using push
array_unshift($fruits, 'kiwi'); // adds to the beggining
print_r($fruits);

/// Remove from an array
array_pop($fruits); //raspberry
array_shift($fruits); //kiwi

// remove from an element
// array_pop($fruits[2]); //remove orange
// print_r($fruits);

// split into chunks of 2
// $chunkedArray = array_chunk($fruits, 2);
// print_r($chunkedArray);
