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
//注册两个用于自动加载的函数名：
spl_autoload_register('auto1');//这只是声明
spl_autoload_register('auto2');
//再分别定义该两个函数：
function auto1($className){
	$file = "./library/" . $className . ".class.php";
	if(file_exists($file)){
		require "./library/" . $className . ".class.php";
	}
}
function auto2($className){
	$file = "./class/" . $className . ".class.php";
	if(file_exists($file)){
		require "./class/" . $className . ".class.php";
	}
}
//这样，如果需要一个类，但当前页面还没有加载该类，
//就会依次调用auto1和auto2，直到找到该类文件并加载
$o1 = new A();	//此时在当前文件中找不到A类，就会先去
				//调用auto1函数，就能够加载该类
				//则就不会再去调用auto2函数了
?>
</body>
</html>
