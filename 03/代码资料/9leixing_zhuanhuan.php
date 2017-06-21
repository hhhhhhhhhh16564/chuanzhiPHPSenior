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
$v1 = (int)7.8;
$v2 = (float)$v1;
echo "<br />v1的值为：$v1, 类型为：" . getType($v1);
echo "<br />v2的值为：$v2, 类型为：" . getType($v2);


$v1 = (int)7.8;		//此时 $v1是 int类型 
$v2 = (float)$v1;	//此时 $v2是float类型，但$v1还是int类型
settype($v1, "float");	//此时 $v1就是 flaot类型了
?>
</body>
</html>
