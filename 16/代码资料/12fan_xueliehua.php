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
$s1 = file_get_contents('./a1.txt');//得到文本文件的内容
$s2 = file_get_contents('./a2.txt');
$s3 = file_get_contents('./a3.txt');
$var1 = unserialize($s1);//对其进行反序列操作，得到“原数据”
$var2 = unserialize($s2);
$var3 = unserialize($s3);

echo "<br />"; var_dump($var1);
echo "<br />"; var_dump($var2);
echo "<br />"; var_dump($var3);

?>
</body>
</html>
