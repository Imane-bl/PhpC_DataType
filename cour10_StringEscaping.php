<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br()
  ============================================
  */

  echo 'Hello PHP';
  echo '<br>';
  echo "Hello PHP";
  echo '<br>';
  echo "Hello 'PHP'";
  echo '<br>';
  echo 'Hello "PHP"';
  echo '<br>';
  echo 'Hello \'PHP\'';//jai fais escaping mais il va imprimer 
  echo '<br>';
  echo "Hello \"PHP\"";//Hello "PHP"
  echo '<br>';
  echo "Hello PHP\\";//Hello PHP\
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines';//Hello PHP On Multiple Lines tout en 1 ligne 
  echo '<br>';

  echo nl2br('Hello PHP
  On Multiple
  Lines');
  //Hello PHP
//On Multiple
//Lines


//nl2br comme br in html 