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
class B{
	public $b2 = 2;
}
class A{
	public $a1 = 1;
	public $b1;	//意图用于存储B的对象
	function __construct(){
		$this->b1 = new B();
		//即new的时候b1中存储的是对象.
	}
	function __clone(){
		//为了实现深克隆
		$this->b1 = clone $this->b1;
	}
}
$o1 = new A();
$o2 = clone $o1;
$o1->a1 = 10;
$o1->b1->b2 = 20;
var_dump($o1);
echo "<br />";
var_dump($o2);
?>
</body>
</html>
