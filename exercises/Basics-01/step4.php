<?php
$name = 'Hisham';
$email = 'Hisham777@gmail.com';
$height = 12;
$width = 18;
$area = $height * $width;
// Output
echo 'My name is ' . $name . ' and my email: ' . $email;
print "\n";  
echo 'The area : ' . $area ;
$position = ' front end developer';
$github_url = 'https://github.com/gk-git';

//first method 
echo "Hello Im " . $name .", Im a" . $position . "check my github " .$github_url;
echo'<br/>';
//second method
echo "Hello Im  {$name}, Im a {$position}  check my github  {$github_url}";
echo'<br/>';
//third method 
echo 'Hello Im ' . $name .', Im a' . $position . 'check my github ' .$github_url;
echo'<br/>';
//3

echo "  My name is   {$name}, junior {$position} this is my {$github_url} account ";



?>