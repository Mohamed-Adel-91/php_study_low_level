<?php

/*
============================================
= Data Types
= ----------
= Boolean + Converting To Boolean
============================================
 */

var_dump((bool) ""); //  false
echo '<br>';
var_dump((bool) array()); // true
echo '<br>';
var_dump((bool) []); // true
echo '<br>';
var_dump((bool) 0); // false
echo '<br>';
var_dump((bool) "0"); // true
echo '<br>';
var_dump((bool) "Elzero"); // true
echo '<br>';
var_dump((bool) array(1)); // true
echo '<br>';
var_dump((bool) [1]); // true
echo '<br>';
var_dump((bool) 100); // true
echo '<br>';
var_dump((bool)  - 100); // true
echo '<br>';
var_dump((bool) 10.5); // true
echo '<br>';
var_dump((bool)  - 10.5); // true
