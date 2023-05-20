<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 2, 3, 4, 5];
$fruits = array('apple', 'mango');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'green',
  7 => 'blue',
];

// echo $colors[1];

$hex = [
  'red' => 'f00',
  'green' => '0f0',
  'blue' => '00f'
];

// echo $hex['green'];

$person = [
  'first_name' => 'Mian',
  'last_name' => 'Azan',
  'email' => 'azan@gmail.com'
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Mian',
    'last_name' => 'Azan',
    'email' => 'azan@gmail.com'
  ], [
    'first_name' => 'Muhammad',
    'last_name' => 'Ashraf',
    'email' => 'ashraf@gmail.com'
  ]
];

var_dump(json_encode($people));
