<?php

header('Content-Type: text/html; charset=utf-8');


$file = './php34.txt';

// echo '<br>', ftell($file_handle);
// fseek($file_handle, 3);
// echo '<br>', ftell($file_handle);

// echo '<br>', fgets($file_handle, 4);

// $mode = 'r+';
// $file_handle = fopen($file, $mode);

// fseek($file_handle, 3);
// echo '<br>', fgetS($file_handle, 4);
// echo '<br>', ftell($file_handle);
// var_dump(fwrite($file_handle, 'JINYONG'));


// $mode = 'a+';
// $file_handle = fopen($file, $mode);
// echo '<br>', ftell($file_handle);
// fseek($file_handle, 5);
// echo '<br>', ftell($file_handle);
// echo '<br>', fgetS($file_handle, 4);
// echo '<br>', ftell($file_handle);
// var_dump(fwrite($file_handle, 'JINDAXIA'));


echo filesize($file);