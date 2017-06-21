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
function f1(){
	echo "<br />函数f1被调用；";
}
$str1 = "f1";
$str1();	//调用可变函数（实际本身是普通函数）

$str2 = function (){
	echo "<br />匿名函数1被调用；";
};
$str2();	//调用匿名函数，形式跟调用可变函数一样

echo "<hr />";
call_user_func_array(
	function($m1, $m2, $m3){
		echo "<br />m1 = $m1";
		echo "<br />m2 = $m2";
		echo "<br />m3 = $m3";
	}
	, array(1,2,3)
);

//再来一个有用的函数
echo "<hr />";
$a1 = array(1,2,3, 4, 5,1);
$s = call_user_func_array(
	function(){	//可见这个匿名函数的作用是求一个数组的“总和”
		$a = func_get_args();	//取得传递过来的所有实参
		$sum = 0;
		foreach($a as $v){
			$sum += $v;
		}
		return $sum;
	}
	, $a1
);
echo "<br />和为：$s";

//继续将上一个例子改造为更好的形式：
$func1 = function(){	//可见这个匿名函数的作用是求一个数组的“总和”
		$a = func_get_args();	//取得传递过来的所有实参
		$sum = 0;
		foreach($a as $v){
			$sum += $v;
		}
		return $sum;
	};
$a1 = array(1,2,3, 4, 5,1);
$s2 = call_user_func_array($func1, $a1);
echo "<br />和为：$s2"

?>
</body>
</html>
