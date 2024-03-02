<?php

/*
============================================
= Data Types
= ----------
= Type Juggling + Automatic Type Conversion
============================================
 */

echo 1+"2"; // 3
echo '<br>';
echo gettype(1+"2"); // Integer
echo '<br>';
echo true; // 1
echo '<br>';
echo gettype(true); // Boolean
echo '<br>';
echo true + true; // 2
echo '<br>';
echo gettype(true + true); // Integer
echo '<br>';
echo 5+'5 Lessons'; // 10 => Warning
echo '<br>';
echo gettype(5+'5 Lessons'); // Integer => Warning
echo '<br>';
echo 10 + 15.5; // 25.5
echo '<br>';
echo gettype(10 + 15.5); // double => Float
echo '<br>';
