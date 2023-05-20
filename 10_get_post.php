<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST["submit"])) {
  echo $_POST["name"];
  echo $_POST["age"];
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