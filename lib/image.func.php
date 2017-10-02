<?php
require_once'string.func.php';
//function verifyImage(){
$width=100;
$height=30;
$image=imagecreatetruecolor($width, $height);
$white=imagecolorallocate($image, 255, 255, 255);
$black=imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
$type=1;
$length=4;
$chars = buildRandomString($type,$length);
session_start();
$sess_name = "verify";
$_SESSION[$sess_name]=$chars;
$fontfiles = array("1.otf","2.ttc","3.TTF");
for ($i=0; $i < $length; $i++) { 
	$size = mt_rand(18,21);
	$angle = mt_rand(-15,15);
	$x = 5 + $i*$size;
	$y = mt_rand(20,26);
	$color = imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
	$fontfile = "../fonts/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
	$text = substr($chars, $i,1);
	imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
	# code...
}
$pixel = false;
if($pixel){
for ($i=0; $i < 50; $i++) { 
	imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $black);	# code...
}
}
$line = 0;
if ($line) {
	for ($i=1; $i<$line; $i++) { 
		$color = imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
		imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1),mt_rand(0,$width-1), mt_rand(0,$height-1), $color);
		# code...
	}
	# code...
}
header("content-type:image/gif");
imagegif($image);
imagedestroy($image);
//}
//verifyImage();
