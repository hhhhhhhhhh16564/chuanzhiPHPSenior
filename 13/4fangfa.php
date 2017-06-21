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
	public $name = "匿名";
	public $age = 18;
	public $PI = 3.14;

	//定义一个方法，该方法可以进行“自我介绍”
	function intro(){
		echo "<br />hi，大家好，我叫 " . $this->name;
		echo "，今年 " . $this->age . " 岁";
	}

	function getXiebian($a, $b){
		$s1 = $a*$a + $b*$b;
		$s2 = pow($s1, 0.5);	//0.5次方就是开方
		return $s2;
	}
}

$p1 = new P();
$xie1 = $p1->getXiebian(3,4);
echo "<br />斜边1 = $xie1";


class Person{
	public $name = "匿名";
	public $age = 18;
	public $PI = 3.14;
	//定义一个方法，该方法可以进行“自我介绍”
	function intro(){
		echo "<br />hi，大家好，我叫 " . $this->name;
		echo "，今年 " . $this->age . " 岁";
	}
}
$p1 = new Person();
$p1->name = '张三';
$p1->age = 20;
$p1->intro();

$p2 = new Person();
$p2->name = '李四';
$p2->age = 22;
$p2->intro();




?>
</body>
</html>
