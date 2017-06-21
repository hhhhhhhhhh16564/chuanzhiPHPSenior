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
$arr1 = array(3, 8=>5,  'dd1'=>6, 2,  11=>9, 4);
$a1 = each($arr1);	//取得数组的当前项的下标和值，
					//并放入数组$a1,并移动指针到下一个
echo "<pre>";
print_r($a1);
echo "</pre>";
$a2 = each($arr1);
echo "<pre>";
print_r($a2);
echo "</pre>";

$arr2 = array( 5, 15, 3,  4);

list($v1, $v2, $v3, $v4) = $arr2;	
echo "<br />v1=$v1, v2=$v2,v3=$v3,v4=$v4";

$arr2 = array(3=>5, 1=>3, 0=>15,2=>4);

list($v1, $v2, $v3, $v4) = $arr2;
echo "<br />v1=$v1, v2=$v2,v3=$v3,v4=$v4";

?>
</body>
</html>
