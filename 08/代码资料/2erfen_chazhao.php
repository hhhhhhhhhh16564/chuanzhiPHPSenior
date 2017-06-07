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
//二分查找思想：
//目标：找一个数据（31）在该数组中的位置
$v1 = 15;
$arr2 = array( 3,  4,  5,  15,  19, 21,  25,  30,  30,  30,  33,  38,  44, 51, 52, 55, 60,  77, 80, 82,  83);
//$arr: 要从中找数据的数组
//$v: 要找的数据
//$start: 要从该数组中查找的开始位置
//$start: 要从该数组中查找的结尾位置
function  binary_search($arr,  $v, $start, $end){
	if($start > $end)return false;
	$mid = floor(($start + $end)/2);	//计算出中间项的位置
	if($v == $arr[$mid]){
		return $mid;	//千恩万谢，第一次就找到了
	}
	else if($v < $arr[$mid]){	//此时就只要去“左边那一半”找了
		$start = $start;	//左边位置还是左边位置
		$end = $mid - 1;	//右边位置就应该是$mid - 1;
		//if($start > $end)return false;
		return binary_search($arr,  $v, $start, $end);
	}
	else{
		$start = $mid + 1;	//左边位置就应该是$mid + 1
		$end = $end;		//右边位置还是右边位置;
		//if($start > $end)return false;
		return binary_search($arr,  $v, $start, $end);
	}
}
$len = count($arr2);
$result = binary_search($arr2, $v1, 0, $len-1);
if($result === false){
	echo "没找到";
}
else{
	echo "位置为：$result";
}
?>
</body>
</html>
