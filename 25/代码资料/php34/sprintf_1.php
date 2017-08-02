<?php


$name = 'Kang';
$as = 'Zhongkang';
$price = 1234.567;
$str = sprintf('%s shi %s, price %f', $as, $name, $price);

echo $str;