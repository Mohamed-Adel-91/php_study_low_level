<?php

  /*
    String Functions
    - parse_str(String[Required], Array[Required]) >>> to  Parse a query string into variables.
      Example:   $data = 'first=hello&last=world';
                parse_str($data, $output);
                echo $output['first']; // Output: hello
                                                  ^^^^^
    - sprintf(String[Optional], Mixed[1] ... Mixed[n]) 
    >>> Formats and returns a variable number of strings in an array.
    - quotemeta(String[Required]) >>> to  Return a version of the input string where special characters are escaped.
      Example:   printf('Hello %s!', 'World');     // Output: Hello World!
               sprintf('Hello %s!', 'World');    // Output: Hello World!
    - str_replace(Search, Replace, String[Required], Count)  
    >>> Searches and replaces pattern in a string.
      Returns the modified string or an array if the search value is an array. The
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional]) 
    >>> Pads a string to a certain length with another string.
      If pad_string isn't supplied  the padding will be done with spaces.
        LeftPad : "."
        RightPad : "-"
      Examples: 
        str_pad("Hello", 8, ".", STR_PAD_LEFT);       // Output: ...Hello
        str_pad("Hello", 8, "_", STR_PAD_BOTH);       // Output: _Hello__
        str_pad("Hello", 12, "-");                    // Output: Hello-----
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])  
    >>> Translates all occurrences of the characters in the `from` parameter using the corresponding 
      character from the `to` parameter. Or uses the values from the `to` parameter as replacement values.
      Example:   echo strtr("a-b-c-d", '-', '/');         // Output: a/b/c/d
                echo strtr("a-b-c-d", array('-'=>'/'));// Output: a/b/c/d
    - substr(String[Required], Start[Optional], Length[Optional])  
    >>> Get part of a string.
      If start is not specified it starts at 0. If length is not specified it goes till the end of the string.
  */

  parse_str("name=Osama&email=o@nn.sa&os=mac", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");

  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l");

  echo "<br>";

  $translation = ["@" => "l", "#" => "o"];

  echo strtr("E@zer# Web Sch##@", $translation);