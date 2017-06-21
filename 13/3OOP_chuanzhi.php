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
class P{
	var $v1 = 10;
}
$p1 = new P();	//也可以写成$p1 = new P;
$p2 = $p1;		//这是值传递
$p1->v1 = 20;	//修改对象$p1
echo "<br />p1->v1 为：" . $p1->v1; 
echo "<br />p2->v1 为：" . $p2->v1; 

echo "<br />对象p1标识符为：";
var_dump($p1);
echo "<br />对象p2标识符为：";
var_dump($p2);

unset($p1);
echo "<br />p1中的v1的值为：" . $p1->v1;
echo "<br />p2中的v1的值为：" . $p2->v1;

$p3 = new P();//这个时候才是创建了一个新对象
				//并同时会赋予一个新的标识符
$p4 = &$p3;		//这是引用传递
echo "<br />对象p3标识符为：";
var_dump($p3);
echo "<br />对象p4标识符为：";
var_dump($p4);
$p3 = new P();	//再给$p3重新复制
$p3->v1 = 100;	//修改$p3
echo "<br />p3中的v1的值为：" . $p3->v1;
echo "<br />p4中的v1的值为：" . $p4->v1;
echo "<br />对象p3标识符为：";
var_dump($p3);
echo "<br />对象p4标识符为：";
var_dump($p4);
?>
</body>
</html>
