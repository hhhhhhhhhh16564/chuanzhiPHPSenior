<?php


// $path = './path/to/some/where';
// $result = mkdir($path);
// $result = mkdir($path, 0644, true);
// var_dump($result);


// $path = './path/to/some/where';
// $path = './path/to';
// $result = rmdir($path);
// var_dump($result);


// $path_from = './path/to/some';
// $path_to = './han';
// $result = rename($path_from, $path_to);
// var_dump($result);


$path = '../shop34';

$dir_handle = openDir($path);
// var_dump($dir_handle);


// $file = readDir($dir_handle);
// echo $file, '<br>';
// $file = readDir($dir_handle);
// echo $file, '<br>';
// $file = readDir($dir_handle);
// echo $file, '<br>';
// $file = readDir($dir_handle);
// echo $file, '<br>';

while (false !== $file = readDir($dir_handle)) {//'0'是合法的文件名，需要判断
	if ($file == '.' || $file == '..') continue;//逻辑子目录，不需要处理
	echo $file, '<br>';
}

closeDir($dir_handle);