<?php

$birth_year = 2005;
$current_year = 2023;

$calculation  = $current_year - $birth_year;

if($calculation > 18){
    echo "You can drive" ;
}

else {
    echo "You still a kid, go and play GTA";
}
?>