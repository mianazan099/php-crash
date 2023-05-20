<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while ($x <= 15) {
//   echo "Number $x <br>";
//   $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 8;

// do {
//   echo "Number $x <br>";
//   $x++;
// } while ($x <= 5);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$arr = ['first', 'second', 'third'];

// for ($i=0; $i < count($arr); $i++) { 
//   echo "$arr[$i] <br>";
// }

// foreach ($arr as $a) {
//     echo "$a <br>";
// }

// foreach ($arr as $num => $a) {
//   echo $num + 1 . " - $a <br>";
// }

$person = [
  'first_name' => 'Mian',
  'last_name' => 'Azan',
  'email' => 'azan@gmail.com',
];

foreach($person as $key => $value) {
  echo "$key - $value <br>";
}
