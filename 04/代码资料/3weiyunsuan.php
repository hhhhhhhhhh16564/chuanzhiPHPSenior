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
$r1 = 9 & 13;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";


$r1 = 18 | 10;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";


$r1 = 9 << 2;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";

$r1 = 9 >> 2;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";
?>
</body>
</html>
