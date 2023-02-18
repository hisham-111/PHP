<?php

function Prime($num)
{
 for($o=2; $o<$num; $o++)
   {
      if($num %$o == 0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$ts = Prime(3);
if ($ts==0)
echo 'This is not a Prime Number'."\n";
else
echo 'This is a Prime Number'."\n";
?>