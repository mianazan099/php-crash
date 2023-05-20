<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = "<script>alert(1)</script>";

echo htmlspecialchars($string);

printf("%s likes to %s", "Azan", "code");
printf("1+1=%d", 1 + 1);
