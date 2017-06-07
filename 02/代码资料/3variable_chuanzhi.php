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
$v2 = $v1;	//此时发生传值问题
$v3 = $v1+10;//此时没有传值问题
$v2++;
echo "<br />v1=$v1, v2=$v2";

echo "<br />";
echo "<br />";
echo "<br />";

$v10 = 10;
$v20 = &$v10;	//此时发生传值问题,注意符号：&
$v20++;
echo "<br />v10=$v10, v20=$v20";

echo "<br />";
unset($v20);
echo "<br />v10=$v10, v20=$v20";

?>
</body>
</html>
