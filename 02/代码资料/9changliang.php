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
define("CONST1", 1);	//最常用的定义形式
define("_C2", "ABC");	//但不推荐使用“__”开头的名字
define("pi", 3.14);		//常量名小写也可以，但不推荐
//使用常量：
echo CONST1;
$str2 = "<h3>" . _C2 . "</h3>";
$mianji = pi * 5 * 5;	//求半径为5的圆面积

const C1 = 11;	//这里是顶层代码，可以使用const

echo "<br />常量C1的值为：" . constant("C1");
$s1 = "C1";
echo "<br />常量C1的值为：" . constant($s1);//$s1的数据就是这一个字符串
											//并且其代表一个常量的名字

echo "<br />常量C1的值为：C1";//常量在双引号字符串中并不能识别

//ini_set("display_errors", 0);

echo "<hr />";
echo NOTCONST;	//未定义的常量名NOTCONST；

if( C1 > 10){	//使用常量，进行判断
//	const C2 = 12;	//这一行是语法错误（非顶层代码）
}
?>
</body>
</html>
