<?php
$a = 100;
$b = 200;
$c = 100;

/*
Check That:
Variable "b" Larger Than Variable "a"
Variable "a" Identical To Variable "c"
Variable "a" Plus Variable "c" Identical To Variable "b"
 */

if ($a < $b && $a == $c && ($a + $c) == $b) {
    echo "The Conditions Are True";
} else {
    echo "The Conditions Are False";
}
echo "<hr>";

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
if ($a <= $b || $a <= $c) {
    echo "$a Is Not Larger Than $b Or $c";
} else {
    echo "$a Is Larger Than Both $b And $c";
}

echo "<hr>";

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B
if ($a > $b && ($a + $b) == $c) {
    echo "$a Is Larger Than $b";
} else {
    echo "$a Is Not Larger Than $b";
}

echo "<hr>";

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
if ($a >= $c && $a == $b) {
    echo "$a is larger than $c and equal to $b";
} else {
    echo "$a is not larger than $c or equal to $b";
}

echo "<hr>";

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] === "GET"):
    echo "You are viewing this page in a GET request.";
else:
    if ($_SERVER["REQUEST_METHOD"] === "POST"):
        // Get the input from the user
        if (isset($_POST['user'])):
            $userName = $_POST['user'];
            if (in_array($userName, $admins)):
                echo "Welcome Admin: {$userName}. You are authorized.";
            else:
                echo "Hi, $userName, You are not an admin. Access Denied!";
            endif;
        endif;
    endif;
endif;

// Input Name "Osama"
// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
  </form>
</body>

</html>


<?php
echo "<hr>";

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

    echo "A + B = C";

} elseif ($a + $c === $b) {

    echo "A + C = B";

} elseif ($b + $c === $a) {

    echo "B + C = A";

} else {

    echo "The End";

}

// Output
// "B + C = A"
echo "<hr>";

$result = ($a + $b === $c) ? "A + B = C" :
(($a + $c === $b) ? "A + C = B" :
    (($b + $c === $a) ? "B + C = A" : "The End"));

echo $result;

echo "<hr>";

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
    echo "The Age Is Good To Go<br>";
    if (gettype($name) === "string") {
        echo "The Name Is Good To Go<br>";
        if ($country === "Egypt") {
            echo "The Country Is Good To Go<br>";
        }
    }
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

if ($age > 18 && gettype($country) === "string" && $country === "Egypt") {
    echo "The Age Is Good To Go<br>" . "The Name Is Good To Go<br>" . "The Country Is Good To Go<br>";
}