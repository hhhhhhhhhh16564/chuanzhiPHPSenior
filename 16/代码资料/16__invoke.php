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
class A{
	public $p1 = 1;
	private $p2 = 2;
	function __invoke(){
		echo "<br />对象应该当函数使用;";
		echo "<br />你是否是想调用该对象的方法sum()?";
	}
	function sum($x, $y){
		return $x+$y;
	}
}
$o1 = new A();
$o1(1,2);	//对象当函数用
?>
</body>
</html>
