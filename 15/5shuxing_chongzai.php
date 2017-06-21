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
class A{
	public $p1 = 1;
	public $propArr = array();//一个数组，用于存储“不存成的属性值”
	function __get( $prop_name ){
		if(isset($this->propArr[$prop_name])){
			return $this->propArr[$prop_name];
		}
		return "不存在属性$prop_name";	
	}
	function __set( $prop_name, $value ){
		$this->propArr[$prop_name] = $value;
	}
	function __isset($prop_name){
		if(isset($this->propArr[$prop_name])){
			return true;
		}
		return false;
	}
	function __unset($prop_name){
		

		if (isset($this->propArr[$prop_name])) {
			unset($this->propArr[$prop_name]);
		}else{

			echo "不存在改属性，没法删除";
		}


	}




}
$o1 = new A();
echo "<br />o1的p1属性值为：" . $o1->p1;//存在的属性
echo "<br />o1的p2属性值为：" . $o1->p2;//不存在的属性
$o1->p2 = 2;	//给一个不存在的属性赋值，则会自动调用__set()
echo "<br />o1的p2属性值为：" . $o1->p2;//不存在的属性
$o1->p3 = 3;
echo "<br />o1的p3属性值为：" . $o1->p3;//不存在的属性
echo "<hr />";
$s1 = isset($o1->p1);
$s2 = isset($o1->p2);
var_dump($s1,$s2);
unset($o1->p2);
echo "<br />";
$s2 = isset($o1->p2);
var_dump($s2);

echo "<br/>";
unset($o1->p9);
?>
</body>
</html>
