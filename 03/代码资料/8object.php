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
//定义一个“人”类
class Person{
	public $name = "匿名";
	public $age = 18;
	public function introMe(){
		echo "hello!";
		echo "我叫" . $this->name;
		echo "，我今年" .$this->age . "岁";
	}
}
$person1 = new Person();	//创建了一个“人”类对象：对象类型
$person1->name = "小明";	//设定这个人的名字
$person1->age = 22;			//设定这个人的年龄
$person1->introMe();		//让这个人自我介绍
?>
</body>
</html>
