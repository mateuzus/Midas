<?php

function generateRandom($number) {
    $random = [];
    for ($i = 1; $i <= $number; $i++) {
      array_push($random, rand(1,10)); 
    }
    
    return $random;
}



$random =  generateRandom(20);  //[2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,0,7,1]; 

$randomCount = array_count_values($random);

asort($randomCount);

$count = count($randomCount);

$keys = array_keys($randomCount);
$keys =  array_pop($keys);
$value = array_pop($randomCount);

echo 'chave '. $keys . ' - ' . 'repetiu ' . $value;