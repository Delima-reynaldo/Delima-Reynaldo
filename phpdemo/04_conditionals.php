<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to (assignment Operator)
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
// age = 20, Lets check if he is old enough to vote eligible to vote
// $age = 17
// if ($age >= 18) {
//  echo 'You are old enough to vote!';
// } else {
//     echo 'Sorry, you are not eligible to vote';
// }
//1-12: morning; 13-17 afternoon; 18 evening
// $t = date('H');
// echo $t;

// if ($t <= 12) {
//     echo 'Have a great morning!';
// } elseif ($t <=17) {
//     echo 'Have a great afternoon!';
// } elsse {
//     echo 'Have a great evening!';
// }

$posts = ['AYOS'];

// if(!empty($posts)){
//     echo $posts[0];
// }else {
//     echo ' There no post';
// }

///Ternary Operator

//The Ternary operator is a shorthand if statements
// Ternary Syntax:
//   conditions ? true : false;

// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// echo $FistPost;

// Switch Statements
$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo ' Your favorite color is red!';
        break;
        case 'green':
            echo 'Your favorite color is green!';
            break;
      case 'blue':
        echo 'Your favorite color is blue!';
        break;
}