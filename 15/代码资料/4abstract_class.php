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
//游戏中的“怪”类，抽象的！
abstract class guai{
	public $blood = 100;
	protected $distance = 30;	//开始发动攻击的距离
	protected abstract function attack();//攻击行为，抽象的
	//这个类不能实例化，也就是不能做出一个“怪”对象
	//但他规定了下级类（蛇怪，虎怪）的一些特性信息
	//其中有个特性行为，就是“攻击”
}
class snakeGuai extends guai{
	//
	function attack(){
		echo "<br />吐火攻击";
		$this->blood--;
	}
}
$o1 = new snakeGuai();
var_dump($o1);
echo "<br />";
$o1->attack();	//蛇攻击一次
echo "<br/>该蛇怪剩余的血为：" . $o1->blood;
?>
</body>
</html>
