<?php

/*
Pre-Defined Variables

Search
- PHP Pre-Defined Variables
 */

// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo '</pre>';

echo $_GET["username"];
echo ' <br/>';
echo $_POST["pass"];

?>

<form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form>
<form action="" method="post">
  <input type="text" name="pass">
  <input type="submit" value="Send">
</form>
