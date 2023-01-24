<?php

// $number = [1,2,3,4,5];
// $fruits = ["apple", "orange","banana"];

// echo $number[0];

// echo $fruits[1];

// $colors = [1=>"red",2=>"green",3=>"blue",4=>"yellow"];

// echo $colors[3];

// $hex =["red" => "#f00", "green"=> "#0f0", "blue" => "#00f"]

$person = [
    "first_name" => "Ryan",
    "last_name" => "Azur",
    "email" => "proxy@gmail.com",
];

echo $person["first_name"];

$people = [
    [
        "first_name" => "Reynaldo",
        "last_name" => "Delima",
        "email" => "reyndelima@gmail.com",
    ],

    [
        "first_name" => "Reyna",
        "last_name" => "Deli",
        "email" => "delima@gmail.com",

    ],

    [
        "first_name" => "Reyn",
        "last_name" => "Delima",
        "email" => "xylearon89@gmail.com",

    ],
];

// var_dump(json_encode($people));

$jsonobj = '{"first_name":"Ryan","last_name":"Azur","email":"raza@gmail.com"}';

var_dump(json_decode($jsonobj));