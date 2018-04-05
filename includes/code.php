
<?php
//取得定量的随机字符串，包含大小写字母和数字
$length=6;
$string='';
$arr=array('a','b','c','d','x','y','z',1,2,3,4,8,9,0);
$arrlength = count($arr);
for($i = 0;$i<$length;$i++)
{
    $string.=$arr[rand(0,$arrlength-1)];
}
//加载字体，字体大小
$font='c:windows/Fonts/Arial.ttf';
$size=12;
//使用已有图形创建新图
$img=imagecreatefromjpeg('button1.jpg');
//计算TTF文字所占区域
$tsize=imagettfbbox($size,0,$font,$string);
//文字居中显示
$dx=abs($tsize[2]-$tsize[0]);
$dy=abs($tsize[5]-$tsize[3]);
$x=(imagesx($img)-$dx)/2;
$y=(imagesy($img)-$dy)/2+$dy;
//为文字配黑色
$black=imagecolorallocate($img,0,0,0);
//用指定的字体输出字符串
imagettftext($img,$size,0,$x,$y,$black,$font,$string);
//生成图片
header('Content-type:image/jpeg:');
imagejpeg($img);
imagedestroy($img);
?>