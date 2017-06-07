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
$v1 = 10;	//全局
function f1(){
	//这里是局部
	echo "<br />v1 = $v1";//局部不能使用全局的变量
	$v2 = 20;
}
f1();
echo "<br />v2 = $v2";//全局不能使用局部

echo "<hr />";
$v1 = 10;
function f2(){
	$v1 = 100;
	echo "<br />内部：v1 = $v1";
	$v1++;
}
f2();
echo "<br />外部：v1 = $v1";


$v1 = 10;	//全局
function f3(){
	//这里是局部
	global $v1;		//此时，就可以访问全局变量$v1了
	$v1++;
	echo "<br />内部开始：：v1 = $v1";
	unset($v1);	//然后断开跟外部变量数据的联系
	echo "<br />内部断开后：v1 = $v1";
}
f3();
echo "<br />外部v1 = $v1";

echo "<hr />";
$v1 = 10;	//全局
function f4(){
	//这里是局部
	echo "<br />内部开始：：v1 = " .$GLOBALS['v1'];
	$GLOBALS['v1']++;
	unset($GLOBALS['v1']);
}
f4();
echo "<br />外部v1 = $v1";


echo "<hr />";
$v1 = 10;	//全局
function f5(){
	//这里是局部
	$GLOBALS['v1_abcd'] = 20;	//完全设定一个元素
}
f5();
echo "<br />外部v1 = $v1";
echo "<br />外部v1_abcd = $v1_abcd";

function f6(){
	global $v6;	//此变量之前所有代码都没有定义过
				//实际此$v6为局部变量，
				//但同时也会创建一个同名全局变量
	$v6 = 60;	
	//虽然函数结束之后，此局部变量会“销毁”
	//但全局变量的值已经被“引用”到了——即可用。
}
f6();
echo "<br />v6 = $v6";
?>
</body>
</html>
