<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

//最常用的定义形式
define("CONST1", 1);
//但不推荐使用“__”开头的名字
define("_C2","ABC");
//常量名小写也可以，但不推荐
define("pi", 3.14);
echo CONST1;

$str2 = "<h2>"._C2."</h3>";

$mianji = pi *5 *5;

echo $str2, $mianji;


const C1 = 11;
echo "<br/> 常量C1 的值为: ". constant("C1");

$s1 = "C1";
echo "<br/>常量C1的值为:" .constant($s1);
echo "<br/>";

echo NOTCONST;
if (C1 > 10) {
	# code...
	echo "呵呵哈哈哈";
}


?>
</body>
</html>