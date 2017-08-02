<?php

header('Content-Type: text/html; charset=utf-8');
$file = './php34.txt';

$mode = 'w';//w, a, x
$file_handle = fopen($file, $mode);

$content = '飞雪连天射白鹿' . "\n";
$result = fwrite($file_handle,$content);
var_dump($result);

fclose($file_handle);