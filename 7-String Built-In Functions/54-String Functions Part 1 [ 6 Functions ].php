<?php

  /*
    String Functions
    - lcfirst(String[Required]) >>> to make the first  character of a string lowercase.
    - ucfirst(String[Required]) >>>  to make the first character of a string uppercase.
    - strtolower(String[Required]) >>> to  convert all characters in a string to lower case.
    - strtoupper(String[Required]) >>> to  convert all characters in a string to upper case.
    - str_repeat(String[Required], Count[Required])  >>> Repeat a given input string for a number of times.
    - strip_tags(String[Optional] ,AllowedTags[Optional]) >>> Strip HTML and PHP tags from a string.
    - ucwords(String[Required], Delimiters[Optional])  
    >>> To make the first letter of each word capitalized.
      If no delimiters are provided,  space is considered as delimiter.
      > To make the first character of each word in a string uppercase and make the rest lowercase.
      > If no delimiters are specified, a space is used as delimiter.
------------------------------------------------------------------------------------------------------------
    Numeric Functions
    - abs(Number[Required]) >>> Returns the absolute value of number.
    - ceil(Number[Required])>>> Return the CEILING of number.
    - floor(Number[Required]) >> Return the FLOOR of number.
    - round(Number[Required] [Precision[Optional]]) >>> Rounds a number.
       * Number: The number you want to round.
       * Precision: (optional) Number of decimal places to which you want to round.
                  If not provided, it will round to the nearest integer.
  */

  echo lcfirst("Elzero Web School") . "<br>";
  echo ucfirst("elzero web school") . "<br>";
  echo strtolower("ELZERO WEB SCHOOL") . "<br>";
  echo strtoupper("elzero web school") . "<br>";
  echo ucwords("elzero web school") . "<br>";
  echo ucwords("elzero web|school", "|") . "<br>";
  echo str_repeat("Elzero", 3);