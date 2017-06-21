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
	private $p2 = 2;
	function __tostring(){
		//return "这是对象转为字符的结果";
		//不过，通常是这样做：
		return $this->p1 . "," . $this->p2;
	}
}
$o1 = new A();
echo "<br />" . $o1;
?>
</body>
</html>
