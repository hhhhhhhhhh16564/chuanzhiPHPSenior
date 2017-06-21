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
class factory{
	//Instance表示“实例”，“对象”
	static function getInstance($className){
		if(file_exists('./class/' . $className . ".class.php")){
			$obj1 = new $className();
			return $obj1;
		}
		else{
			return null;//也可以die();
		}
	}
}
$obj1 = factory::getInstance("A");//获取类A的一个对象
$obj2 = factory::getInstance("B");//获取类B的一个对象
$obj3 = factory::getInstance("A");//再获取类A的一个对象


/**
* 
*/
class A
{
static 	$p1 = 10;

public  	$p2 = 1111;

	function show(){
		$this->show2();
	}	
	function show2(){
		echo "<br/>". self::$p1;
		echo "<br/>". $this->p2;
	}

}
/**
* 
*/
class B  extends A 
{
	static $p1 = 20;
	public  	$p2 = 2222;
}

$ob1 = new A();

$ob1->show();// 等于10毫无疑问

$ob2 = new B();

$ob2->show(); // 不等于20 而是10？

?>
</body>
</html>
