<?php

/*
============================================
= Data Types
= ----------
= Type Casting
= ----------------------
= "boolean" or "bool"
= "integer" or "int"
= "float" or "double" or "real"
= "string"
= "array"
= "object"
= "null"
= ------
= Search For Settype
============================================
 */

echo 5 + (int) "5 Lessons"; //  Output: 10, because it converts the string to an integer before adding.
echo '<br>';
echo 5 + (integer) "5 Lessons"; //  Same as above; output: 10.
echo '<br>';
echo 5 + (integer) "5 Lessons"; // Same again!
echo '<br>';
echo gettype(5 + (int) "5 Lessons"); // Returns 'integer', indicating that the expression was evaluated as an integer.
echo '<br>';
echo 10 + 15.5; //25.5
echo '<br>';
echo 10 + (int) 15.5; //25
echo '<br>';
echo gettype(10 + (int) 15.5); //Output: string, because PHP adds the number and then turns it into a string.
echo '<br>';
echo 10.5 + 10.5; //21
echo '<br>';
echo gettype(10.5 + 10.5); //Outputs: double
echo '<br>';
echo (int) 10.5 + (int) 10.5; // 20
echo '<br>';
echo gettype((int) 10.5 + (int) 10.5); //Outputs: int
echo '<br>';
echo (int) (10.5 + 10.5); // 21
