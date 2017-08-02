<?php

// $file = './upload.jpg';
$list = array(
	1 => './upload.jpg',
	2 => './buhao.php',
	3 => './yasuo.zip',
	);

$file = $list[$_GET['id']];
//basename获取一个地址中的名字部分（最后一个斜杠之后）
header('Content-Disposition: Attachment;filename=' . basename($file));
$finfo = new Finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file);
header('Content-Type: ' . $mime);
header('Content-Length: ' . filesize($file));

$mode = 'rb';//b 二进制模式，用于兼容处理文本与二进制文件
$handle = fopen($file, $mode);
while(!feof($handle)) {
	echo fgets($handle, 1024);
}
fclose($handle);