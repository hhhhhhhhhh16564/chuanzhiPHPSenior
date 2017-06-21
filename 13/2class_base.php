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



//定义一个类
class C1{
	//类中有一些属性（就是变量）：
	var $name = '匿名';
	var $sex = "未知";
	var $age = 18;
	//类中有一些方法（就是函数）
	function f1(){
		echo "<br />" . $this->name . "在执行函数（方法）f1";//$this就是自己。
	}
	//类中有一些常量（类常量）
	const PI = 3.14;
}

//该类创建好之后，只是一个“死代码”（类似一个变量定义好）
//我们通常需要使用该类才能发挥该类的作用
//第一个使用就是“创造该类的一个对象”
$person1 = new C1();//C1是类名，当然如果用Human就更好。
//此时$person1就是一个“对象”，是有Ｃ１这个类所创建出来的对象
$person2 = new C1();

$person1->name = "张三";	//给属性赋值（类似给变量赋值）
$person1->sex = "男";		//同理
$str1 = $person1->name;		//取得属性值（类似取得变量值）
echo "{$str1}的性别为：" . $person1->sex;
echo "，年龄为：" . $person1->age;
$person1->f1();

$person2 = new C1();

$CName = "C1";
$person3 = new $CName();	//可变类(名)

$person4 = new $person3;	//通过对象创建该类的新对象
?>
</body>
</html>
