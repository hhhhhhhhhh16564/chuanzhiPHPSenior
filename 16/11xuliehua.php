<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
$v1 = 1;
$v2 = 'abc';
$v3 = array('a'=>1, 'bb'=>2.2, 'abcdefg',  true);

$st1 = serialize($v1);
$st2 = serialize($v2);
$st3 = serialize($v3);


file_put_contents('./a1.txt', $st1);
file_put_contents('./a2.txt', $st2);
file_put_contents('./a3.txt', $st3);


 




?>
</body>
</html>
