<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */
  //var_dump

  var_dump((bool) ""); // 0 false 
  echo '<br>';
  var_dump((bool) array());//f
  echo '<br>';
  var_dump((bool) []);//false short syntax de array 
  echo '<br>';
  var_dump((bool) 0);// f
  echo '<br>';
  var_dump((bool) "0");//f
  echo '<br>';
  var_dump((bool) "Elzero");//t
  echo '<br>';
  var_dump((bool) array(1));//t nimport quel nbe -true 
  echo '<br>';
  var_dump((bool) [1]);//t
  echo '<br>';
  var_dump((bool) 100); //t
  echo '<br>';
  var_dump((bool) -100);//t
  echo '<br>';
  var_dump((bool) 10.5);//t
  echo '<br>';
  var_dump((bool) -10.5);//t