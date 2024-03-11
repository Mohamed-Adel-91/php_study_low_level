<?php

  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])  
    : Returns a string with line breaks inserted at specified
      1. strlen() - Returns the length of a string in bytes.
      2. substr() - Extract part of a string.
          Syntax: substr(string, start index[, length])
            If length is not provided it will return from start index till end of the string.
      3. strpos() - Find position of first occurrence of a substring in a string.
      4. strrpos() - Find position of last occurrence of a substring in a string.
      5. ucfirst() - Make the first character of a string uppercase.
      6. lcfirst() - Make the first character of a string lowercase.
  
    - strlen(String[Required]) >>> to  get the number of characters in a string
    - str_split(String[Required], Length[Optional]) >>> to  split a string into an array
      if no second argument is passed then it will break the string at each occurrence of a space.
    - strip_tags(String[Required], Allowed[Optional])  >>> To remove HTML and PHP tags from a string
    Note: In PHP, strings are treated as arrays of bytes. 
    So you can access any byte value using its ASCII value.
    Note: In PHP, strings are treated as sequences of bytes rather than as sequences of characters.
    - nl2br(String[Required], XHTML[Optional])  >> To replace newline characters (\n) with <br /> or <BR> tags
  */

  echo chunk_split("Elzero Web School", 3, "@");
  echo '<br>';

  echo '<pre>';
  print_r(str_split("Elzero"));
  echo '</pre>';

  echo '<pre>';
  print_r(str_split("Elzero", 2));
  echo '</pre>';

  echo "<h3>Hello <b>Elzero</b></h3>";
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
  echo '<br>';

  echo nl2br("Elzero\nWeb\nSchool", false);