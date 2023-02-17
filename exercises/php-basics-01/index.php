<?php

$marks = array(
      
 
    "Eggs" => array(
        "balade" ,
        "mazere3" ,
    ),
          
    "milk" => array(
        "Fresh",
        "Taanayel",

    ),
    "water-pack" => array(
        "Tanoureen",
        "Reem",

    ),
);
echo "Hey Sir, Please I need 1 pack of ";

echo $marks['Eggs'][0]; 
echo "eggs and 3 {$marks['water-pack'][1]} water-pack"

?>