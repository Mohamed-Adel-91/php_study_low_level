<?php
// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

echo "<hr>";
$a = "10";

// Needed Output

echo $a;
// 10
echo "<br>";

$b = (int) $a;
var_dump($b);
// "integer"
echo "<br>";

print($a);
// 10
echo "<br>";

echo gettype($b);
// "integer"
echo "<br>";

print_r($b);
// 10
echo "<br>";

var_dump(is_int($b));
// "integer"
echo "<br>";

// For The People Who Love Searching
printf($a);
// 10
echo "<br>";
// "integer"
// 10
// "integer"

echo "<hr>";

$a = 10;
$b = 20;

// Needed Output
var_dump($a <=> $b);
//-1

echo "<hr>";
//Comparison Operators
$a = 10;
$b = 20;
$c = 15;

var_dump($a !== $b); // True
echo "<br>";
var_dump($c != $a); // True
echo "<br>";
var_dump($a <= $b); // True
echo "<br>";
var_dump($a < $b); // True
echo "<br>";
var_dump($a != $c); // True
echo "<br>";
var_dump($a !== $c); // True
echo "<br>";
var_dump(gettype($a) == gettype($b)); // True
echo "<br>";
var_dump(gettype($a) === gettype($b)); // True
echo "<br>";
var_dump(gettype((float) $a) != gettype($b)); // True
echo "<br>";

echo "<hr>";
$points = 10;

// Write Your Code Here
++$points;
++$points;
++$points;
echo $points; // 13
echo "<br>";
// Write Your Code Here
--$points;
--$points;
--$points;
--$points;
--$points;
echo $points; // 8;

echo "<hr>";
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " . $b . " " . $c;

// Method Two
$h = "$a $b $c";

// Method Three
$f = "{$a} {$b} {$c}";

// Method Four
$g = $a;
$g .= " $b";
$g .= " $c";

echo $d; // Elzero Web School
echo "<br>";
echo $h; // Elzero Web School
echo "<br>";
echo $f; // Elzero Web School
echo "<br>";
echo $g; // Elzero Web School

echo "<hr>";
$a = 10;
$b = 20;
$b *= 50 * $a;
$a %= $a;

echo $a + $b * $a + $b + $a * $a * $a; // 10000

echo "<hr>";
// Code 1
$y = @$i or die("Custom Error 1");

// Code 2
$f = @file("Not_A_File") or die("Custom Error 2");

// Code 3
(@include "Not_A_File") or die("Custom Error 3");