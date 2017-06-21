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
$link = mysql_connect("localhost","root", "123");	
mysql_query("set names utf8");
mysql_query("use php34;");
						//得到一个“连接到mysql数据库”的资源。
						//资源的理解：一个外部本来就有的“对象”（数据）
					//程序中，该资源变量只是一个“指向”该对象（数据）的标示符
var_dump($link);

$result = mysql_query("select * from money");//这是结果集资源
						//对该结果集进行“fetch”操作才能获得php数据（数组）
echo "<br />";
var_dump($result);

class A{}
$o1 = new A();			//对象是我们通常代码完整创造出来。
echo "<br />";
var_dump($o1);

$arr = array(3, 'abc', true);
echo "<br />";
var_dump($arr);
?>
</body>
</html>
