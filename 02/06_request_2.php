<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

//理解：

unset($_GET);
echo "销毁\$_GET数据之后";
echo "<pre>GET::<BR />";
var_dump($_GET);
echo "</pre>";
echo "<pre>REQUEST::<BR />";
var_dump($_REQUEST);
echo "</pre>";





?>





</body>
</html>