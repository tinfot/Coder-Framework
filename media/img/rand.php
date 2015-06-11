<?php
session_start();
ob_start();
header("Content-type: image/png");
$im = @imagecreate(60, 20)
    or die("Cannot Initialize new GD image stream");

$rand = substr(md5(microtime()),0,5);
$_SESSION["rand"]=$rand;	

$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 233, 14, 91);
$line_color = imagecolorallocate($im, 12, 127, 29);
imagestring($im, 5, 5, 2,  $rand, $text_color);
imageline($im,0,10,60,10,$line_color);
imagepng($im);
imagedestroy($im);
?> 