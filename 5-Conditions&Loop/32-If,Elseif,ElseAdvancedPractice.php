<?php

/*
Control Structure
- If, Elseif, Else <= Advanced Practice

30% To 60%
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST['lang'] == 'ar') {
        echo $_POST["username"];
        echo '<h1>مرحباً  في اللغة العربية</h1>';
    } elseif ($_POST['lang'] == 'fr') {
        echo $_POST["username"];
        echo '<h1>Bonjour dans la langue française </h1>';
    } elseif ($_POST['lang'] == 'en') {
        echo $_POST["username"];
        echo '<h1>Hello in English!</h1>';
    } else {

        header("Location: ./utils/lang.php"); /* Redirect browser to PHP web site */
        exit(); // Make sure that code below does not get executed
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support</title>
</head>

<body>
  <form action="" method="POST">
    <input type="text" name="username">
    <select name="lang">
      <option value="ar">عربي</option>
      <option value="en">English</option>
      <option value="fr">français</option>
      <option value="no">none</option>
    </select>
    <input type="submit" value="Go">
  </form>
</body>

</html>