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
class Jizhuidongwu{
	public $p1 = "具有脊椎";
	function showMe(){
		echo "<br />我是脊椎动物，特征为：";
		echo "<br />属性p1=" . $this->p1;
	}
}
class Human extends Jizhuidongwu{

	public $p1 = "具有28节脊椎骨的脊椎";//28是假设
	public $p2 = '有32颗牙齿';
	function showMe(){
		echo "<br />我是人类，特征为：";
		//echo "<br />属性p1：" . $this->p1;
		//实际应用中，通常上一行（显示父类信息）会使用下一行代替
		parent::showMe();	//这样可以更节省
		echo "<br />属性p2：" . $this->p2;
	}
}
$h1 = new Human();
$h1->showMe();


class C{
	function show1($para1){
		echo "<br />父类的show1方法：para1 = " . $para1;
	}
}
class D extends C{
	function show1($para, $para2){
		echo "<br />子类的show1方法";
	}
}
?>
</body>
</html>
