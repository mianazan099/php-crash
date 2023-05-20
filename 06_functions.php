<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function register_user($email) {
  echo "$email Registered";
}

// register_user('azan@gmail.com');

function sum($n1 = 1, $n2 = 1) {
  return $n1 + $n2;
}

// $num = sum(6, 6);
// echo $num;

$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(100,10);

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(9,9);

