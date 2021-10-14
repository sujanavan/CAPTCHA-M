<?php
// Create a 100*30 image
$im = imagecreate(100, 18);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

$a=rand(1,20);          // Extend range as per requirement
$b=rand(1,20);          
$o=rand(1,2);           // Extend range for other operators

if($o==1)
{
$c=$a+$b;
$o="+";
}
else
{
$c=$a-$b;
$o="-";
}
session_start();
$_SESSION["captcha"]=$c;

$msg=" ".$a." ".$o." ".$b." = ";

// Write the string at the top left
imagestring($im, 5, 0, 0, $msg, $textcolor);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>