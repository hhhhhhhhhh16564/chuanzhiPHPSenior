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
//测试php代码可执行
$i = 10;
$i++;
echo "<h3>abcd——$i</h3>";

//显示当前时间（测试时间配置）：
echo date("Y-m-d H:i:s");

//连接mysql数据库（测试数据库配置）：
$conn = mysql_connect("localhost", "root", "123");
echo "<hr />";
var_dump($conn);

?>
</body>
</html>
