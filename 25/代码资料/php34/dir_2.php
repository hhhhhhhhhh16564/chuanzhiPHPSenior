<?php

header('Content-Type: text/html; charset=utf-8');
/**
 * @param 目录地址
 */
function readDirs($path) {
	$dir_handle = openDir($path);

	while(false !== $file=readDir($dir_handle)) {
		if ($file=='.' || $file=='..') continue;

		//输出该文件
		echo $file, '<br>';
		//判断当前是否为目录
		if(is_dir($path . '/' . $file)) {
			//是目录
			readDirs($path . '/' . $file);
		}

	}

	closeDir($dir_handle);
}

// $path = 'e:/amp/apache/htdocs/shop34';
// readDirs($path);


// $path = 'e:/amp/apache/htdocs/shop34';
// readDirsTree($path);
/**
 * @param 目录地址
 * @param $deep=0 递归调用深度
 */
function readDirsTree($path, $deep=0) {
	$dir_handle = openDir($path);

	while(false !== $file=readDir($dir_handle)) {
		if ($file=='.' || $file=='..') continue;

		//输出该文件
		echo str_repeat('&nbsp;', $deep*4), $file, '<br>';
		//判断当前是否为目录
		if(is_dir($path . '/' . $file)) {
			//是目录
			$func_name = __FUNCTION__;
			$func_name($path . '/' . $file, 1+$deep);
		}

	}
	closeDir($dir_handle);
}

//shop34下的文件
// array(
// 	array('filename'=>'index.php', 'type'=>'file',),
// 	array('filename'=>'application', 'type'=>'dir', 'nested' => array(
// 				array('filename'=>'.htacces', 'type'=>'file',),
// 				array('filename'=>'back', 'type'=>'dir', 'nested'=>array()),
// 			)
// 		),

// 	);


// $path = 'E:\amp\apache\htdocs\php34\zh';
// $list = readDirsNested($path);
// echo '<pre>';
// // print_r($list);
// foreach($list as $first_key=>$first) { 
// 	echo $first_key, $first['name'], '<br>';
// 	if ($first['type'] == 'file') continue;
// 	foreach($first['nested'] as $second_key => $second) {
// 		echo '&nbsp;', $first_key , 'nested' , $second_key, $second['name'], '<br>';
// 	}
// }

/**
 * @param 目录地址
 */
function readDirsNested($path) {
	$nested = array();//存储当前目录下所有的文件
	$dir_handle = openDir($path);
	while(false !== $file=readDir($dir_handle)) {
		if ($file=='.' || $file=='..') continue;

		//创建当前文件信息
		$fileinfo = array();
		// $fileinfo['name'] = $file;
		$fileinfo['name'] = iconv('gbk', 'utf-8', $file);

		//判断当前是否为目录
		if(is_dir($path . '/' . $file)) {
			//是目录
			$fileinfo['type'] = 'dir';
			$func_name = __FUNCTION__;
			$fileinfo['nested'] = $func_name($path . '/' . $file);
		} else {
			//是文件
			$fileinfo['type'] = 'file';
		}
		//存入$nested数组内
		$nested[] = $fileinfo;
	}

	closeDir($dir_handle);
	return $nested;
}


var_dump(file_exists(iconv('UTF-8', 'GBK', 'E:\amp\apache\htdocs\php34\zh\学生列表.txt')));