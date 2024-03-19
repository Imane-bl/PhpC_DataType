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

  $name = "Osama";
// echo <<<Here je peux faire ca 

  // Heredoc  fais le parsing
  echo <<<"Here"
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Here;
//Hello PHP Special Characters $$$ ' ' ' """"" \\ Hello My Name Is Osama
  echo '<br>';

  // Nowdoc
  echo <<<'Now'
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Now;
//Hello PHP Special Characters $$$ ' ' ' """"" \\\\ Hello My Name Is $name
  echo '<br>';

  echo '<ul>';
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
  echo '</ul>';

  echo '<br>';

  echo <<<"navlinks"
  <ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
  </ul>
  navlinks;


  echo '<br>';

  echo <<<'navlinks'
  <ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
  </ul>
  navlinks;