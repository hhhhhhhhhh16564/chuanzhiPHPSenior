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
//接口：
interface flyAnimal{
	function fly();	//接口中的方法都是抽象方法，无需声明抽象
}
class bird{
	public $wings = "2";//2个翅膀
}
//“继承”接口的特性，被称为：实现（implements）
class maque extends bird implements flyAnimal{
	function fly(){
		echo "<br />煽动 {$this->wings} 个翅膀在飞翔";
	}
}
$m1 = new maque();
$m1->fly();
class tuoniao extends bird{
	function run(){
		echo "<br />鸵鸟在飞跑!";
	}
}
$t1 = new tuoniao();
$t1->run();
?>
</body>
</html>
