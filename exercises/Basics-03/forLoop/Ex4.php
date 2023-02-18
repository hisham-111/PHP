<?php

for ($i=0; $i<7; $i++)
{
  for ($o=7; $o>=0; $o--)
	{
     if ((($i == 0 or $i == 6) and $o >= 0 and $o <= 6) or $i+$o==6)
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

?>