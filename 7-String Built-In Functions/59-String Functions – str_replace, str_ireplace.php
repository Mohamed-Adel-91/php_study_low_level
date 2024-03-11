<?php

  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) 
    >>> to  replace all occurrences of a string with another in:  "Hello World"
                                                              Find : 'o' 
                                                              Replace With : '' (empty)
                                                              Data : "Hello World"
                                                              Result : Hell Wrld
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) 
    >>> To make it case-insensitive , we use the function above but add 'i' at the end.
  */

  echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
  echo '<br>';
  echo "Replaces Count Is $r"; // 3
  echo '<br>';
  echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
  echo '<br>';
  echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

  echo '<pre>';
  print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';