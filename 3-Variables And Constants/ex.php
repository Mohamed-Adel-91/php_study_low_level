<?php $name = "Elzero Courses";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=<?php echo $name ?> />
  <title>Welcome To
    <?php echo $name; ?>
  </title>
</head>

<body>
  <h1>
    <?php echo $name; ?>
  </h1>
  <p>Here In
    <?php echo $name; ?> We Provide Front-End And Back-End Courses
  </p>
  <hr>
  <div>
    <?php echo $name; ?> Is The What You Need.
  </div>
  <footer>All Right Reserved To
    <?php echo $name; ?>
  </footer>
</body>

</html>

<hr>
<?php
$name = "elzero";
$$name = "Web";
$web = &$$name; //reference variable to the value of $$name which is equal to $web

echo $$name . "<br>"; // Output: Web
echo $elzero . "<br>"; // Output: Web
echo "{$$name}" . "<br>"; // Output: Web
echo "$elzero" . "<br>"; // Output: Web
echo $web . "<br>"; // Output: Web

echo "<hr>";
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

echo "<hr>";
echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo PHP_OS_FAMILY;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
echo DEFAULT_INCLUDE_PATH;
echo '<br>';
echo '<pre>';
print_r($_SERVER);
echo '<br>';
echo $_SERVER["HTTP_CONNECTION"];
echo '<br>';
echo $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo OPENSSL_DEFAULT_STREAM_CIPHERS;

echo '</pre>';
phpinfo(INFO_MODULES);