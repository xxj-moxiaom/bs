<?php
header('Content-type:image/jpeg:');
$width=60;
$height=15;
$img=imagecreatetruecolor($width,$height);
$white=imagecolorallocate($img,0xff,0xff,0xff);
imagefill($img,0,0,$white);
$chars='1234567890';
$chars_len=strlen($chars);
$code_len=4;
$code="";
for($i=0;$i<$code_len;++$i)
{
    $rand=mt_rand(0,$chars_len-1);
    $code.=$rand;
}
session_start();
$_SESSION['ver_code']=$code;
$str_color=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
$font=5;
$img_w=imagesx($img);
$img_h=imagesy($img);
$font_w=imagefontwidth($font);
$font_h=imagefontheight($font);
$code_w=$font_w*$code_len;
$code_h=$font_h;
$x=($img_w-$code_w)/2;
$y=($img_h-$code_h)/2;
imagestring($img,$font,$x,$y,$code,$str_color);
imagejpeg($img);
imagedestroy($img);

