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
$s1 = "ABC";
$s2 = "ABc";
$s3 = "XYZ";
$s4 = "XZZ";
$s5 = "89Z";
$s1++;$s2++;$s3++;$s4++;$s5++;
echo "s1=$s1,s2=$s2,s3=$s3";
echo ",s4=$s4,s5=$s5";
echo "<hr />";
echo "<hr />";

$n1 = 10;		$n2 = 10;
$n1++;			++$n2;	//这两个自加运算，结果一样
echo "<br />n1 = $n1, n2 = $n2";
$s1 = $n1++;	$s2 = ++$n2;	//这里会有区别：s1,s2不同
								//但n1,n2还是一样（都自加了）


echo "<br />n1 = $n1, n2 = $n2";
echo "<br />s1 = $s1, s2 = $s2";
echo "<br />", $n1++, ",", ++$n2;//这里仍然会有区别：输出不同
								//虽然结果n1,n2的值还是相同
echo "<br />n1 = $n1, n2 = $n2";
?>
</body>
</html>
