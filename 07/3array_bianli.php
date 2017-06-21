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

//求该数组中的最大值：
$arr1 = array(3, 8=>5,  'dd1'=>6, 2,  11=>9, 4);

//方法1：foreach语法：
$max = reset($arr1);	//这里用current($arr1)也行
foreach($arr1 as  $k => $v){
	if($v > $max ){
		$max = $v;
	}
}
echo "<br />最大值为：$max";

//方法2：for+next语法：
$max = reset($arr1);
$len = count($arr1);
for($i = 0; $i < $len; ++$i){
	$k = key($arr1);	//对本题要求来说：可以不需要下标
	$v = current($arr1);	//取得当前值
	if($v > $max ){
		$max = $v;
	}
	next($arr1);	//移动指针到下一个
}
echo "<br />最大值为：$max";

echo "<hr />";
//课堂/课间练习：
//求得一下数组的最大值和最小值以及他们的下标
//并：将他们的位置交换：即结果类似这样：array(3, 8=>5,  'dd1'=>6, 9,  11=>2, 4);
$arr1 = array(3, 8=>5,  'dd1'=>6, 2,  11=>9, 4);
//交换原理：
$a = 3;
$b = 4;
$temp = $a;
$a = $b;
$b = $temp;
//对于数组的2个元素的交换：
//$temp = $arr1[0];
//$arr1[0] = $arr1[3];
//$arr1[3] = $temp
$max = $min = reset($arr1);	//取出第一项的值
$maxPos = $minPos = key($arr1);	//取出第一项的下标
foreach($arr1 as $k => $v){
	if($v > $max){	//如果发现某项值比$max大
		$max = $v;	//则放入$max
		$maxPos = $k;//同时将此时的下标存起来
	}
	else if($v < $min){
		$min = $v;
		$minPos = $k;
	}
}
echo "<br />最大值$max, 位置为：$maxPos";
echo "<br />最小值$min, 位置为：$minPos";
echo "<br />交换之前";
print_r($arr1);		//输出数组
$temp = $arr1[$maxPos];
$arr1[$maxPos] = $arr1[$minPos];
$arr1[$minPos] = $temp;
echo "<br />交换之后";
print_r($arr1);		//输出数组
?>
</body>
</html>
