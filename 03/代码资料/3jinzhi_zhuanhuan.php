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
$v1 = 123;
$r1 = decbin($v1);//参数必须是10进制数字，转换后的结果必然是二进制字符串。
echo "r1=$r1, 其类型为：" . getType($r1) ;

$v2 = 178;	//10进制
$r2 = decoct($v2);//转为8进制，结果是8进制数字字符串
echo "<br />r2=$r2, 其类型为：" . getType($r2) ;

$v3 = 178;	//10进制
$r3 = dechex($v3);//转为16进制，结果是16进制数字字符串
echo "<br />r3=$r3, 其类型为：" . getType($r3) ;

echo "<hr />";
$n1 = "1010110";
$s1 = bindec($n1);	//将2进制转换为10进制，结果10进制数字
echo "<br />s1=$s1, 其类型为：" . getType($s1) ;


$n1 = "1234";
$s1 = octdec($n1);	//将8进制转换为10进制，结果10进制数字
echo "<br />s1=$s1, 其类型为：" . getType($s1) ;


$n1 = "12AB";
$s1 = hexdec($n1);	//将16进制转换为10进制，结果10进制数字
echo "<br />s1=$s1, 其类型为：" . getType($s1) ;

echo "<h3>" . bindec(123) . "</h3>";
echo "<h3>" . bindec(0123) . "</h3>";
echo "<h3>" . bindec("0123") . "</h3>";
echo "<h3>" . octdec(0123) . "</h3>";
?>
</body>
</html>
