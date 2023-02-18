<?php

function my_sqrt($num)
{
  $a = $num;
  $b = 1;

  while($a > $b)
  {
    $a = ($a + $b)/2;
    $b = $num/$a;

  }
  return $a;
}

print_r(my_sqrt(16)."\n");
print_r(my_sqrt(14)."\n");

?>