<?php 
$array = array(3 , 4 , 5 );
// $e1 = 3; 
// $e2 = 4;
// $di = 5;
$rec = 0;
$dia = 0;   
  for($i=0 ; $i < count($array) ; $i++){
    if ($e1 * $e1 + $e2 * $e2 === $di * $di) {
        $rec++;
    }
    if ($e1 === $e2) {
        $dia++;
    } 
    if ($rec>0)
    echo "This is rectangles.";
    if ($dia>0)
    echo "This is rhombus.";
  }
   


?>