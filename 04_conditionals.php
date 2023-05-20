<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
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

$age = 18;

// if ($age >= 18) {
//   echo 'you can vote';
// } else {
//   echo 'you can\'t vote';
// }

$t = date('H');

// if ($t < 12) {
//   echo 'Good Morning';
// } else if ($t < 17) {
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// }

$posts = ['first post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'no posts';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $first_post = !empty($posts) ? $posts[0] : 'no posts';
// $first_post = !empty($posts) ? $posts[0] : null;

// $first_post = $posts[0] ?? null;

// echo $first_post;

/* -------- Switch Statements ------- */

$fav_color = 'blue';

switch ($fav_color) {
  case 'red':
    echo 'favorite color red';
    break;
  case 'green':
    echo 'favorite color green';
    break;
  case 'blue':
    echo 'favorite color blue';
    break;
  default:
    echo 'your favorite color is not red, green, blue.';
}
