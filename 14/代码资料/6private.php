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
	private $p1 = 1;
	public function showInfo(){
		echo "<br />属性p1=" . $this->p1;
	}
}
class D extends C{
	private $p2 = 2;
	public function showInfo2(){
		echo "<br />属性p1=" . $this->p1;//访问的是上级的似有成员$p1
		echo "<br />属性p2=" . $this->p2;//访问的是自己的私有成员$p1
	}
}
$d1 = new D();
$d1->showInfo2();
echo "<br />在类外p2=" . $d1->p2;//这一行出错，因为在“外面”不能访问私有成员$p2

?>
</body>
</html>
