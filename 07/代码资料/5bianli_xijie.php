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
$arr2 = array( 5, 15, 3,  4);
foreach($arr2 as $key =>$value){
	$value *=2;
	echo "<br />$key => $value";
}
echo "<br />";
print_r($arr2);

$arr2 = array( 5, 15, 3,  4);
foreach($arr2 as $key =>&$value){
	$value *=2;
	echo "<br />$key => $value";
}
echo "<br />";
print_r($arr2);



$arr2 = array( 5, 15, 3,  4);	//原数组
foreach($arr2 as $key =>$value){
	if($key == 1){	//操作值为15这一项，但指针已经到下一个
		//$arr2[$key] = 2*$value;
		$arr2[] = 100;	//关键在这里！改变了了原数组（增加一项）
						//此时foreach中的这个$arr2不再是外面那个$arr2
						//而是进行了复制的一个拷贝
	}
	echo "<br />$key => $value";
}
echo "<pre>";
print_r($arr2);
echo "</pre>";
//并且，还可以看到原来的数组停留的位置（指针）
$key1 = key($arr2); $value1 = current($arr2);
echo "<br />key1 = $key1, value1 = $value1";

?>
</body>
</html>
