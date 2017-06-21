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
//表示5个原始数据
const D1 = 1;
const D2 = 2;
const D3 = 4;
const D4 = 8;
const D5 = 16;

$state = 13;	//"00001101"，表示所有灯泡的总状态
//需求1：判断灯泡1的状态：
$r1 = $state & D1;
if($r1 > 0){
	echo "<br />灯1亮";
}
else{
	echo "<br />灯1灭";
}
//需求2：判断灯泡2的状态：
$r1 = $state & D2;
if($r1 > 0){
	echo "<br />灯2亮";
}
else{
	echo "<br />灯2灭";
}
//实际上，我们还可以来输出所有灯泡的状态
echo "<br />实际总状态为：";
showAll($state);

//需求3：打开第2个灯泡：
$state = $state | D2;	//
echo "打开第2个灯泡之后：";
showAll($state);

//需求4：关闭第1，3个灯泡：
$state = $state &  ~D1;	//
$state = $state &  ~D3;	//
echo "关闭第1，3个灯泡：";

showAll($state);


//显示所有灯泡状态
function showAll($state){
	echo "<p>";
	for($i = 1; $i <= 5; ++$i){
		$temp = "D" . $i;
		$r1 = $state & constant($temp);
		if($r1 > 0){
			echo "灯{$i}亮，";
		}
		else{
			echo "灯{$i}灭，";
		}
	}
	echo "</p>";
}
?>
</body>
</html>
