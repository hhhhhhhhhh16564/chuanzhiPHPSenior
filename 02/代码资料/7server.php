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
echo "<pre>";
//var_dump($_SERVER);	//这种形式不太好看
echo "</pre>";
//改造如下：

echo "<table border='1'>";
foreach($_SERVER as $key => $value){
	echo "<tr>";
	echo "<td>$key</td>";
	echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
