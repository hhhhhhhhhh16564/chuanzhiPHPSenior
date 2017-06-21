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
class C{
	public $p1 = 1;
	function showMe(){
		echo "<br />我是父类，数据有：";
		echo "<br />C中p1=" . $this->p1;
	}
	function __construct($p1){
		$this->p1 = $p1;
	}
}
class D extends C{
	public $p2 = 2;
	function __construct($p1,$p2){
		//经典用法
		// self::__construct($p1);//调用父类的构造函数来初始化p1
		$this->p2 = $p2;	//初始化p2
	}
	function showMe2(){
		echo "<br />我是子类，数据有：";
		//基本用法：
		parent::showMe();//调用父类的showMe方法，
		echo "<br />D中p2=" . $this->p2;
	}
}
$d1 = new D(10,20);	//此时就需要尊照构造函数的参数结构来使用
$d1->showMe2();
?>
</body>
</html>
