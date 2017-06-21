<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

      define(BR, "<br/>");

		$v1 = 123;
//参数是十进制数字，结果为二进制字符串
		$r1 = decbin($v1);
		echo "r1 = $r1 其类型为:".gettype($r1).BR;

//参数是十进制数字，结果为8进制字符串
		$v2 = 178;
		$v2 = decoct($v2);
		echo "v2 = $v2 其类型为:".gettype($v2).BR;
//参数是十进制数字，结果为16进制字符串
		$v3 = 178;
		$r3 = dechex($v3);
		echo "r3 = $r3 其类型为:".gettype($r3).BR ;




$n1 ="10101011";
//参数是二进制字符串，结果为10进制数字
$s1 = bindec($n1);
echo "s1 = $s1 其类型为".gettype($s1).BR;

//
$n2 = "1234";
$s2 = octdec($n2);
echo "s2 = $s2 其类行为: ".gettype($s2).BR;


//十六进制转化为十进制
$n1 = "12FA";
$s1 = hexdec($n1);
echo "s1 = $s1 其类型为:".gettype($s1).BR;




echo BR.BR.BR;

echo "<h3>" . bindec(123) . "</h3>";
echo "<h3>" . bindec(0123) . "</h3>";
echo "<h3>" . bindec("0123") . "</h3>";
echo "<h3>" . octdec(0123) . "</h3>";






















	 ?>
</body>
</html>