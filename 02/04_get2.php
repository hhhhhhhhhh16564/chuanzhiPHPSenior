<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
//单引号也可以用双引号，本质是一个字符串，其实是数组的键名（下标）
$v1 = $_GET['name'];

$v2 = $_GET["pwd"];

echo "v1=$v1, v2= $v2";
echo "<hr>";
echo "<pre>";

var_dump($_GET);

echo "</pre>";
 ?>
</body>
</html>