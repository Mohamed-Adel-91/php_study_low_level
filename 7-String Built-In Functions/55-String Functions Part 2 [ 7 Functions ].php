<?php

  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias  
    >>> to  be used when you want to add a separator between: 
      elements of an array.
    - explode(Separator[Required], String[Required], Limit[Optional]) 
    >>> to  be used when you want to split a string into  an array based on: 
      a specific character (separator).
    - str_shuffle(String[Required]) 
    >>> to  shuffle the characters in a string.
    - strrev(String[Required]) 
    >>> to  reverse a string.
    - trim(String[Required], CharsList[Optional]) 
    >>> to remove any leading and trailing white space,
    or specified characters from the beginning and end of a string.
    - ltrim(String[Required], CharsList[Optional])  
    >>> is similar to trim but only removes leading spaces.
    - rtrim(String[Required], CharsList[Optional])  
    >>> is similar to trim but only removes trailing spaces.
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  echo implode(" ", $friends) . "<br>";
  echo implode(", ", $friends) . "<br>";
  echo implode("@@", $friends) . "<br>";
  echo implode($friends) . "<br>";

  $str = "Elzero Web School Is Cool";

  echo "<pre>";
  print_r(explode(" ", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode("I", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, 3));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, -2));
  echo "</pre>";

  echo str_shuffle("Elzero") . "<br>";
  echo strrev("Elzero") . "<br>";

  echo strlen("   Elzero  ") . "<br>";
  echo strlen(trim("   Elzero  ")) . "<br>";

  echo trim("#@@Elzero@@@###", "@") . "<br>";

  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";