<?php
## Snack 4
// Creare un array con 15 numeri casuali, 
// tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
// var_dump($numbs);


function getNums ($min, $max, $nItems) {
  $numArray = [];
  while (count($numArray) < $nItems) {
    # code...
    $num = rand($min, $max);
    if (!in_array($num, $numArray)) {
      # code...
      $numArray[] = $num;
    }
  }
  return $numArray;

}

var_dump(getNums(0, 100, 15));


?>