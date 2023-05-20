<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ["apple", "mango", "banana"];

// echo count($fruits);

// var_export(in_array('apple', $fruits));

// Add to array
$fruits[] = "grape";
array_push($fruits, "blueberry");
array_unshift($fruits, "watermelon");

// remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[1]);

// Split into two chunks
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr3);

$a = ["green", "red", "yellow"];
$b = ["avocado", "apple", "banana"];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 10);
// print_r($numbers);

$newNumbers = array_map(fn($number) => "Number $number", $numbers);

// print_r($newNumbers);

$evenNumbers = array_filter($numbers, fn($number) => $number % 2 === 0);
// print_r($evenNumbers);

$sum = array_reduce($evenNumbers, fn($carry, $num) => $carry + $num);
print_r($sum);
