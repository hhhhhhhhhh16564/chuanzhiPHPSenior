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
class C1{
	static $v1 = 10;	//静态属性
}
C1::$v1 = 100;	//修改静态属性的值；
$s1 = C1::$v1;	//取得静态属性的值；
echo "s1 = $s1";
$c1 = new C1();
$c2 = new C1();
echo "<br />c1的中的静态属性v1=" . $c1::$v1;
$c1::$v1 = 1000;	//通过$c1修改了静态属性值
echo "<br />c2的中的静态属性v1=" . $c2::$v1;

class S1{
	public $v1 = 1;
	static $v2 = 2;
	static function showInfo(){
		echo "<br />显示信息";
		//echo "v1 = " . $this->v1;
		echo "v2 = " . S1::$v2;
		//这里是静态方法中，准备调用非静态方法
		S1::f1();//这里违法了调用普通方法的语法
		$this->f1();//这里违法了静态方法中没有$this
	}
	function f1(){
		echo "<br />这是非静态方法。";
	}
}

$obj1 = new S1();
$obj1::showInfo();

//S1::showInfo();	//没有使用对象调用方法，
				//所以该方法中的$this有错误

class S2{
	public $v1 = 1;
	static function getNew(){
		return new self;	//self代表“当前类”
							//new self就是当前类的一个对象
	}

}
echo "<hr />";
$obj2 = S2::getNew();	//通过S2的静态方法得到该类的一个新对象
var_dump($obj2);
?>
</body>
</html>
