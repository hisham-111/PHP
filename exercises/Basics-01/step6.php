<?php


function calculateArea($height , $width){
    if($height == 5 && $width == 5){
        $area =  $height * $width;
        echo "Area is {$area} " ;
    }

    else {
        echo 'you should try to use number 5 ';
    }
}



// calculateArea(5 , 5); //Area is 25 
 calculateArea(5 , 3); //you should try to use number 5 

?>