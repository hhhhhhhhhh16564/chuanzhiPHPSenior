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
$arr1 = array(5, 'aa'=>22, 12, 'd1'=>'abc');
foreach($arr1 as  $key => $value){
	echo "<br />下标： $key, 值： $value";
}
echo "<hr />";
echo $arr1['ddd'];
echo "<br />";
echo $arr1[8];

?>
</body>
</html>
