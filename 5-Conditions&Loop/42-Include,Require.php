<?php

/*
Control Structure
- Including Files

Include
Require
 */

include "./utils/test.php"; // $a = 10;

echo $a . '<br>';

$a = 20;

require "./utils/test.php"; // $a = 10;

echo $a . '<br>';

echo "Continue";

echo "<hr>";

include_once "./utils/test.php"; // $a = 10;

echo $a . '<br>';

$a = 20;

require_once "./utils/test.php"; // $a = 10;

echo $a . '<br>';

echo "Continue";