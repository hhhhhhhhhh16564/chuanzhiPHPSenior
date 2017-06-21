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
	//定义一个方法，该方法可以进行“自我介绍”
	function intro(){
		echo "<br />hi，大家好，我叫 " . $this->name;
		echo "，今年 " . $this->age . " 岁";
	}
	function __construct($n, $a){
		$this->name = $n;
		$this->age = $a;
	}
}
//$p1 = new P();	//此时这里出错
//$p1->name = '张三';
//$p1->age = 20;
//$p1->intro();
//上述做法如果可以在创建对象的同时，
//就给该对象设定其特有的值，就方便了，比如：
$p2 = new P('李四', 22);//此时可以看作是在调用方法__construct()
$p2->intro();
?>
</body>
</html>
