<?php



function Power_Of_two($num)
{
   if(($num & ($num - 1)) == 0){
    
		return "$num is power of 2";
    }
    
   else{
		return "$num is not power of 2";
    }
}


print(Power_Of_two(4)."\n");
print(Power_Of_two(36)."\n");
print(Power_Of_two(16)."\n");


?>