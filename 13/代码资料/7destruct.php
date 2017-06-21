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
class P{
	public $v1 = 1;
	function __construct($n){
		$this->v1 = $n;
		echo "<br />被创建了";
	}
	function __destruct(){
		echo "<br />被销毁了";
	}
}
echo "<h3>1</h3>";
$p1 = new P(5);
$p2 = new P(15);
$p3 = new P(25);
unset($p1);	//被销毁
echo "<h3>2</h3>";
$p2 = 3;	//可以等于任意一个数据
			//目的是让$p2原来所指向的对象“没有所属”
			//此时就会发生该原来对象“销毁”情形
			//不过，如果原来有代码$p2a = $p2,
			//则此时又不会销毁该对象

echo "<h3>3</h3>";
?>
</body>
</html>
