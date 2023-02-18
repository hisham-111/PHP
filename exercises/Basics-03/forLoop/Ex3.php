
<?php
$n = 15;
for ($i=1; $i<=$n; $i++)
        {
            if($i<=$n/2)
            {
                for ($j=1; $j<=$i; $j++)
                {
                    echo "*";
                }
            }
            else {
                for ($j=1; $j<$n-$i+2; $j++)
                {
                    echo "*";
                }
            }
            echo "\n";
        }