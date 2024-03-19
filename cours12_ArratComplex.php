<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */



  /*Array
(
    [0] => Samah // Assma 
    [A] => Ahmed
    [B] => Basem
    [1] => Osama
    [2] => Gamal
    [9] => Amera 
    [10] => Eman
    [11] => Mohamed
     [8] => Haytham
      [12] => Samer
)*/
  echo '<pre>';
  print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud", //prend 1 car ya deja 0 donc 1 
    
    True => "Sayed", //true=1 donc va supp mahmoude et le remplacer avec 
    
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    
    "Eman",
    "Mohamed",
    
    False => "Asmaa",
    
    8 => "Haytham",
    
    "Samer",
//nested array     
"Names" => ["Osama", "Ahmed",
"Sayed" => ["1","2", "3"]]

  ]);
  echo '</pre>';