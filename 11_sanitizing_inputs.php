<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST["submit"])) {
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
  // $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_var($_POST["age"], FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
  echo $age;
} ?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<label>Name
  <input type="text" name="name">
</label>
<label>Age
  <input type="text" name="age">
</label>
<input type="submit" value="Submit" name="submit">
</form>