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
$v1 = 5;
$v2 = 3;
$r1 = $v1 + $v2;
/*
cpu内部运算模拟示意：
5:	00000101	(既是原码，又是补码）
3:	00000011	(既是原码，又是补码）
+
--------------
	00001000
可见，就是2的3次方（8)
*/


$v1 = 5;
$v2 = 3;
$r1 = $v1 - $v2;
//实际应用中，cpu中的相减，会被转换为相加运算
//因为只要对减数取负就得到一个新的负数，然后相加
//类似这样：$r1 = $v1 + (-$v2)

/*
cpu内部运算模拟示意：
5:	00000101	(既是原码，又是补码）
3:	00000011	(既是原码，又是补码）
-3: 10000011	(原码)
-3: 11111100	(反码)
-3: 11111101	(补码)
//下面开始计算：5+(-3):
5:	00000101	(补码）
-3: 11111101	(补码)
+
-----------------------
	00000010	(补码)
可见得到的结果是补码为2的值，则其原码自然也是2
*/
?>
</body>
</html>
