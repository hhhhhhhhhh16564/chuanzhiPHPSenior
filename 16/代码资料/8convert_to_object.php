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
$arr = array('a1'=>1, 'bb'=>2.2, 3,  4.5);
$o1 = (object)$arr;
var_dump($o1);
echo "<br />属性a1为：" . $o1->a1; 
echo "<br />属性ab为：" . $o1->bb; 
//echo "<br />属性0为：" . $o1->0; //此时就出错
								//而且无法处理该属性了

$v1 = null;
$o2 = (object)$v1;
echo "<br />";
var_dump($o2);

$s1 = 1;
$s2 = 2.2;
$s3 = 'abc';
$s4 = true;
$obj1 = (object)$s1;
$obj2 = (object)$s2;
$obj3 = (object)$s3;
$obj4 = (object)$s4;
echo "<pre>";
var_dump($obj1,$obj2,$obj3,$obj4);
echo "</pre>";
?>
</body>
</html>
