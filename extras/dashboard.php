<?php
session_start();

if (isset($_SESSION["username"])) {
  $username = $_SESSION["username"];
  echo "<h1>Welcome $username</h1>";
  echo "<a href='logout.php'>logout</a>";
} else {
  echo "<h1>Welcome Guest</h1>";
  echo "<a href='/php-crash/13_sessions.php'>home</a>";
}
