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

class C{
	public $p1 = 1;
	public $p3 = 3;
	function __construct($p1,$p3){
		echo "<br />父类构造方法调用了";
		$this->p1 = $p1;
		$this->p3 = $p3;
	}
}
class D extends C{
	public $p2 = 2;
	function __construct($p1,$p2, $p3){
		echo "<br />子类构造方法调用了";
		parent::__construct($p1,$p3);

		$this->p2 = $p2;
	}
	function showInfo(){
		echo "<br />p1=$this->p1";
		echo "<br />p2=$this->p2";
		echo "<br />p3=$this->p3";
	}
}
$d1 = new D(10, 20, 30);
$d1->showInfo();

?>
</body>
</html>
