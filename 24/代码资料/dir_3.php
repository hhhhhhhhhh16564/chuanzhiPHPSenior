<?php

// $call_num = 0;
$path = 'e:/amp/apache/htdocs/shop34_die';
$result = rmDirs($path, $n);
var_dump($result);
var_dump($n);
/**
 * @param 目录地址
 */
function rmDirs($path, &$call) {
	++ $call;
	// ++ $GLOBALS['call_num'];
	$dir_handle = openDir($path);
	while(false !== $file=readDir($dir_handle)) {
		if ($file=='.' || $file=='..') continue;

		//判断当前是否为目录
		if(is_dir($path . '/' . $file)) {
			//是目录
			$func_name = __FUNCTION__;
			$func_name($path . '/' . $file, $call);
		} else {
			//文件
			unlink($path . '/' . $file);
		}

	}
	closeDir($dir_handle);
	return rmdir($path);
}