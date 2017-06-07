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
//写一个表单，可以输入一个数字，提交后判断该数字是否是一个“素数”。
//如果是，就输出“数字xx是素数”，否则就输出“数字xx不是素数”。
//提示：素数的概念（含义）是：只能被1和它自己本身整除——在大于1的整数范围内。

//为了节省时间：这里就不写表单了，
$n1 = 10007;//要判断的数，可以改为任意其他数，以供测试

//从头找到尾：找能整除的个数
$c = 0;
for($i = 1; $i <= $n1; ++$i){
	if($n1 % $i == 0){
		$c++;	//计数器思想
	}
}
if($c == 2){
	echo "{$n1}是素数";
}
else{
	echo "{$n1}不是素数";
}

//另一个改进做法：
$c = 0;
//只要找一半的数，并判断如果只有1个能整除
for($i = 1; $i <= $n1/2; ++$i){
	if($n1 % $i == 0){
		$c++;	//计数器思想
	}
}
if($c == 1){
	echo "{$n1}是素数";
}
else{
	echo "{$n1}不是素数";
}

///*
	function is_ss($n){
		for($m=2;$m<$n;$m++){
		if($m>pow($n,1/2)){
			echo "$n &nbsp;";
			break;
		}
		if($n % $m == 0){
			break;
	}}}

	for($i=9500;$i<=10500;$i++){
		is_ss($i);
	}
//*/

echo "<hr />";
$a = array("E_ERROR","E_WARNING","E_PARSE","E_NOTICE","E_CORE_ERROR","E_CORE_WARNING","E_COMPILE_ERROR","E_COMPILE_WARNING","E_USER_ERROR","E_USER_WARNING","E_USER_NOTICE","E_STRICT","E_ALL");
echo "<table border='1' >";
foreach($a as $key => $value){
	echo "<tr >";	
		echo "<td>$value</td>";
		echo "<td>" . constant($value) . "</td>";
		$v1 = constant($value);
		$v1 = decbin($v1);
		$v1 = str_pad($v1,16,"0",STR_PAD_LEFT);
		$v1 = str_replace("1", "<font color=red>1</font>", $v1);
		echo "<td>$v1</td>";
	echo "</tr >";	
}
echo "</table>";

echo "<hr />";
//求一个整数数组中的最小的奇数，如果没有奇数，则直接输出“没有奇数”，否则输出该数。
$a = array(13, 5, 8, 11, 7, 6);
//分2部：
//第一步：取出所有的奇数，并放入一个新的数组中；
$a2 = array();	//空数组
foreach($a as $value){
	if($value % 2 == 1 ){
		$a2[] = $value;	//放入
	}
}

//第二步：取出这个新的奇数数组中的最小的一个（如果有)
if($a2){
	$min = min($a2);//直接取得，也可以使用逻辑进行取得
	echo "最小的奇数为：$min";
}
else{
	echo "没有奇数";
}
?>
</body>
</html>
