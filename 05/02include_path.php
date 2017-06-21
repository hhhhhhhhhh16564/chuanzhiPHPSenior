<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
//设定配置文件中的include_path的值——代码中的设定只对当前代码有效。
//而且这里的设定，无需重启apache

	$customPath = "/Users/julyonline/Sites/ChuanPHP/phpSenior";

//先获取系统的include_path值
$path = get_include_path();

$path_new = $path . PATH_SEPARATOR . $customPath;

//PATH_SEPARATOR: 是系统常量，代表目录分割符：
//		unix系列中，是“:”
//		window系列中，是“;”

//再来设定“自己”想要加入的paht路径 这样就不会破坏（丢失）原有路径设定
// set_include_path($path_new);

include("news.html");

//getcwd()获得当前工作目录

echo "<p>当前的工作目录：" . getcwd() . "</p>";

//相对路径：
//相对路径：
include './dir1/page1.php';

?>

	
</body>
</html>