<?php

header('Content-Type: text/html; charset=utf-8');
$file = './php34.txt';


// $content = date('H:i:s') . "\n";
// // $result = file_put_contents($file, $content);
// $result = file_put_contents($file, $content, FILE_APPEND);
// var_dump($result);


$mode = 'r';
$file_handle = fopen($file, $mode);
// var_dump($file_handle);

// $len = 6;
// $content = fread($file_handle, $len);
// var_dump($content);

// $len = 12;
// $content = fread($file_handle, $len);
// var_dump($content);


// $len = 24;
// $content = fgets($file_handle, $len);
// var_dump($content);
// $len = 24;
// $content = fgets($file_handle, $len);
// var_dump($content);
// $len = 24;
// $content = fgets($file_handle, $len);
// var_dump($content);

// echo fgetC($file_handle);
// echo fgetC($file_handle);
// echo fgetC($file_handle);

$content = '笑书神侠倚碧鸳' . "\n";
$result = fwrite($file_handle,$content);
var_dump($result);

fclose($file_handle);