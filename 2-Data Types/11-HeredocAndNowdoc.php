<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */

  $name = "Mohamed";

  // Heredoc
  echo <<<"Here"
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Here;

  echo '<br>';

  // Nowdoc
  echo <<<'Now'
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Now;

  echo '<br>';

  echo '<ul>';
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
  echo '</ul>';

  echo '<br>';

  echo <<<"navLinks"
    <ul>
      <li>$name</li>
      <li>$name</li>
      <li>$name</li>
      <li>$name</li>
    </ul>
    navLinks;