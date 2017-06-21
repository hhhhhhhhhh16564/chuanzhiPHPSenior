<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	f1();

	$v1 = 1;
	$v2 = 2;
	function f1(){
		$v3 = 3;
		$v4 = 4;
		echo "<br/>函数被调用了！";
	}

		f1();
echo "<pre>global数组的内容为: <BR/>";
var_dump($GLOBALS);
echo "</pre>";
	 ?>
</body>
</html>