<?php

$grocery = array("Eggs", "Milk", "Cheese" , "Water Pack", "Tissues" , "Watermelon");

echo 'Hello Sir, do you have';
$i = 0;
foreach( $grocery as $value) {
    if( $i >= 3) break;
    echo " , {$value} ";
    $i++;
}
echo "? Also if you sell fruits can I find a ";
echo end($grocery)."\n";

?>