<?php

function getPrimo($number) {
    $primos = [];
    
     for($i = 1; $i <= $number; $i++)
 {
     $divisores = 0;
      
     for($j = $i; $j >= 1; $j--)
     {
         if (($i % $j) == 0) {
             $divisores++;
         }
     }
      
 
     if ($divisores == 2)
     {
        array_push($primos, $i);
     }
     
     
 }
 
 return $primos;
 }
 
 $primos = getPrimo(10);
 
 echo array_pop($primos);
