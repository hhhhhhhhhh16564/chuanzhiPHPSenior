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
function f1(){
	echo "<br />f1函数被执行（任务完成）";
}
function f2($x, $y){
	echo "<br />f1函数被执行（任务完成）";
	return $x+$y;
}
class A{
	public $p1 = 1;
	//当使用一个对象调用一个不存在的方法时，就会自动调用本方法
	//其中$name就是本来要调用的方法名
	//$array就是本来调用该方法时使用的实参数据，都装入该数组
	function __call($name, $array){
		$count = count($array);
		if($count==0){
			f1();
		}
		else if($count == 2){
			return f2($array[0], $array[1]);
		}
	}
}
$o1 = new A();
$o1->f1();		//不存在的方法，不带实参
$v1 = $o1->f1(1,2);	//不存在的方法，并带2个实参
echo "<br />o1里面的p1=" . $o1->p1;
echo "<br />结果v1=" . $v1;
?>
</body>
</html>
