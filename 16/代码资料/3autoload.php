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
//这个函数不是我们程序中去调用，
//而是在“需要类的时候”自动调用。
//而且此时就会传一个实参进来，是所需要类的类名
function __autoload($className){
	echo "ok<br />";
	require "./library/" . $className . ".class.php";
}
$o1 = new A();
echo "o1种的a1=" . $o1->a;
?>
</body>
</html>
