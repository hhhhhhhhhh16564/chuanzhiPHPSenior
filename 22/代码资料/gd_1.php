<?php


//创建画布
$width = 500;
$height = 300;
$img = imageCreateTrueColor($width, $height);
// var_dump($img);

//分配颜色
$green = imageColorAllocate($img, 0x0, 0xff, 0x0);//0, 0xff, 0

//填充
imageFill($img, 0, 0, $green);


//输出到文件 ./green.png
// imagePNG($img, './green.png');

//直接输出
header('Content-Type: image/png;');
imagePNG($img);


imageDestroy($img);