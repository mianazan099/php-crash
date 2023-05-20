<?php
// create connection
$conn = new mysqli("localhost", "azan", "password", "php_dev");

// check connection

if ($conn->connect_error) {
  die("Connection Error " . $conn->connect_error);
}

// var_dump(mysqli_query($conn, "SELECT * FROM feedback"));

?>
