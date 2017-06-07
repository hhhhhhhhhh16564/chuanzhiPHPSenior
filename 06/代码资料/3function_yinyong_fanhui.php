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
function  &f1($p1, $p2){
	static $result = 0;	//定义为静态变量，此时该变量的值就会“保留”
						//即不会随着函数结束而销毁，而是会一直“持有”该值
						//而且，第二次及以后再调用该函数，也不会初始化了
	echo "<br />result = $result";//第一次应该是0，第二次应该是6
	$h = $p1*$p1 + $p2*$p2;
	$result = pow($h, 0.5);
	return $result;
}

//这里的引用，体现为$v1和函数中的$result指向同一个数据
$v1 = &f1(3, 4);
echo "<br />v1 = $v1";	//应该是5
$v1++;	//应该是6了
		//则按理来说，这里$result也自加了，但这里并不能表现出来，

$v2 = &f1(4,5);	//再调用一次，去函数中输入$result;

?>
</body>
</html>
