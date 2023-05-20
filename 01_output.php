<?php
/* -------- Output & Comments ------- */

echo 'hi';
// echo [1, 2, 3];

// print_r([1, 2, 3, 4]);

// var_dump('string');
// var_export(true);

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= 'hi' ?></h1>
</body>

</html>