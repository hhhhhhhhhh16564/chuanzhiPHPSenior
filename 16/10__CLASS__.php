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
class  A{
	function  f1(){
		echo "<br />" . __CLASS__;	//输出“A”
		echo "<br />" . __METHOD__; //输出“f1”
		//注意：get_class()也可以得到类名，但其必须有个“对象”
		echo "<br />当前类为：" . get_class($this);
	}
}
$o1 = new A();
$o1->f1();
?>
</body>
</html>
