<?php



function greaterFn($num){
  
    if($num > 30){

        $value = "{$num} your number is greate than 30 ";
        return $value;
    }
    else if($num > 20){
        $value ="{$num} your number is greater than 20 ";
        return $value;
    }

    else if($num > 10){
        $value = "{$num} your number is greate than 10 ";
        return $value;
    }

    else {
        $value = "{$num} your number is less than 10 ";
        return $value;
    }
    
  }

  echo greaterFn(33) ."\n";
  echo greaterFn(23) ."\n";
  echo greaterFn(15) ."\n";
  echo greaterFn(5)  ."\n";



?>