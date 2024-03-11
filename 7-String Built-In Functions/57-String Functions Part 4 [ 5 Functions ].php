<?php

  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive 
    >>>  Returns the position of where a value is found in a string. If not found, returns FALSE.
    
    Note: The start position parameter is optional and if omitted it will search from the beginning of the string.
    Note: The function starts searching from the  start_position given (if provided) else it  starts from the first character of the string.
    Note: The start position is optional and if it's omitted PHP will search from the beginning of the string.
    Note: The function does NOT count characters from right to left (Endianness). It counts from Left to Right.
    Note: The start position refers to the character number that you want PHP to begin searching from . 
          By default this will be at the beginning of the string (position 0).
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive 
    >>> to find last occurrence of a substring within a string
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    >>>  Searches for a value within a string 
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive 
    >>>  Finds the last occurrence of a case-insensitive value within a string.
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional]) 
    >>> Counts how many times a substring occurs within another string.
  */

  var_dump(strpos("Hello Hello", "H")); // 0
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // 6
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // 0
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1