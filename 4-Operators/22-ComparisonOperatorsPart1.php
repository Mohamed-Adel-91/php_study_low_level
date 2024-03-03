<?php

/*
Operators
- Used To Perform Operations On Values.

Comparison Operators
- Used To Compare Two Values

- Part 1
- ==    => Equal
- !=    => Not Equal
- <>    => Not Equal
- ===   => Identical
- !==   => Not Identical
 */

// Test Equal
var_dump(100 == 100);
echo '<br>';
var_dump(100 == "100");
echo '<br>';
var_dump(100.0 == "100");
echo '<br>';
var_dump(100.0 != "100");
echo '<br>';
var_dump(100.0 != "100");

echo '<br>';
echo '<hr>';
echo '<br>';

// Test Identical
var_dump(100 === 100);
echo '<br>';
var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === "100");
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100.0 !== "100");
echo '<br>';
var_dump(100.0 !== 100);
