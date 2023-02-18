<?php
function Palindrome($String) {
    $i = 0;
    $o = strlen($String) - 1;
    $flag = 0;
  
    while($o > $i){
      if ($String[$i] != $String[$o]){
        $flag = 1;
        break;
      }
      $i++;
      $o--;
    }
  
    if ($flag == 0){
      echo $String." is a Palindrome string.\n";
    } else {
      echo $String." is not a Palindrome string.\n";
    }
  }
  
  Palindrome("kayak");
  Palindrome("Hello");
  Palindrome("JavaScript");
?>