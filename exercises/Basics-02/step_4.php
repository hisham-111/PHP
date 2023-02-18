<?php

$value=153;  
$tnum=0;  
$x=$value;  
    while($x!=0)  
    {  
        $Armst=$x%10;  
        $tnum= $tnum   +   $Armst*$Armst*$Armst;  
        $x= $x/10;  
    }  

if($value==$tnum){  
    echo "Yes it is an Armstrong number";  
    }

else{  
    echo "No it is not an armstrong number";  
} 


?>