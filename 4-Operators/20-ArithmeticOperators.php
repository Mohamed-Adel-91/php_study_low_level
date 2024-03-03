<?php

/*
Operators
- Used To Perform Operations On Values.

Arithmetic Operators
- Used To Do Arithmetical Operations &#038; Conversion

- $a [+]  $b => Addition
- $a [-]  $b => Subtraction
- $a [*]  $b => Multiplication
- $a [/]  $b => Division
- $a [%]  $b => Modulus
- $a [**] $b => Exponentiation
- +$a        => Identity
- -$a        => Negation
 */

echo 10 + 20;
echo '<br>';
echo gettype(10 + 20);
echo '<br>';
echo 9.5 + 20.5;
echo '<br>';
echo gettype(9.5 + 20.5);
echo '<br>';

echo '<hr>';
echo 10 - 20;
echo '<br>';
echo gettype(10 - 20);
echo '<br>';
echo 9.5 - 20.5;
echo '<br>';
echo gettype(9.5 - 20.5);
echo '<br>';

echo '<hr>';
echo 10 * 20;
echo '<br>';
echo gettype(10 * 20);
echo '<br>';
echo 9.5 * 20.5;
echo '<br>';
echo gettype(9.5 * 20.5);
echo '<br>';

echo '<hr>';
echo 20 / 10;
echo '<br>';
echo gettype(20 / 10);
echo '<br>';
echo 20 / 8;
echo '<br>';
echo gettype(20 / 8);
echo '<br>';

echo '<hr>';
// we can use modules  to find the remainder of a division operation,
// using the % operator : we use it in minus time from other
echo 21 % 10; // Divided => Remove 1 To Become 20
echo '<br>';
echo 23 % 10; // Divided => Remove 3 To Become 20
echo '<br>';
echo 29 % 10; // Divided => Remove 9 To Become 20
echo '<br>';
echo 30 % 10; // Divided => 0
echo '<br>';

echo '<hr>';
echo 2 ** 4;
echo '<br>';
echo 2 * 2 * 2 * 2;
echo '<br>';
echo 3 ** 5;
echo '<br>';
echo 3 * 3 * 3 * 3 * 3;
echo '<br>';

echo '<hr>';
echo "100";
echo '<br>';
echo gettype("100");
echo '<br>';
echo +"100";
echo '<br>';
echo gettype(+"100");
echo '<br>';

echo '<hr>';
echo "-100";
echo '<br>';
echo gettype("-100");
echo '<br>';
echo -"-100";
echo '<br>';
echo gettype(-"-100");
