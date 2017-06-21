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
	function f1(){
		echo "<br />当前对象的类" . get_class($this);
		echo "<br />p1的值为：" . $this->p1;
		@B::f2();
	}
}
class B{
	function f2(){
		echo "<br />当前对象的类" . get_class($this);
		echo "<br />p1的值为：" . $this->p1;
	}
}

$o1 = new A();
$o1->f1();

echo "<hr/>";

B::f2();
die();
?>
</body>
</html>
