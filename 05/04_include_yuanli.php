<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
echo "<p>代码(1)</p>";
$m = 10;

include './page3ddddd.php';//不存在的文件
//这里报错，但会继续执行后续代码

echo "<p>代码(2)</p>";

require './page3dddd.php';//不存在的文件
//这里报错，并不再执行后续代码

echo "<p>m = $m </p>";
echo "<p>m2 = $m2 </p>";

echo "<p>代码(3)</p>";



	 ?>
</body>
</html>