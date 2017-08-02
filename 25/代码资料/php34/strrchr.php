<?php



$file = 'x.y.z.png';
echo strrchr($file, '.');
// 找到字符串中某个子字符串的最后出现位置，从该位置截取到字符串末尾。
echo '<br>';
echo strchr($file, '.');
// 找到字符串中某个子字符串的首次出现位置，从该位置截取到字符串末尾。

echo '<br>';
$file = __FILE__;
echo $file, '<br>';
$info = pathinfo($file);
var_dump($info);


echo '<hr>';
echo uniqID(), '<br>';
echo uniqID('logo_'), '<br>';
echo uniqID('logo_', true), '<br>';