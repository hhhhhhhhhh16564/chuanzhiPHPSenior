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
$o1 = new stdclass();	//
var_dump($o1);
$o1->prop1 = 1;
$o1->pp2 = 22;
echo "<br />o1->prop1 = " . $o1->prop1;
echo "<br />o1->pp2 = " . $o1->pp2;
echo "<pre >";
var_dump($o1);
echo "</pre >";

?>
</body>
</html>
