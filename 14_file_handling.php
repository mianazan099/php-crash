<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$filename = "extras/users.txt";

if (file_exists($filename)) {
  $file = fopen($filename, "r");
  $content = fread($file, filesize($filename));
  fclose($file);
  echo $content;
} else {
  $file = fopen($filename, "w");
  $content = "Mian\nAzan\nAshraf";
  fwrite($file, $content);
  fclose($file);
}
