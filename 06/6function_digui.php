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
function f1(){
	static $i = 1;
	echo "$i ";
	$i++;
	if($i < 100){
		f1();
	}
}
f1();

echo "<hr />";

function jiecheng( $n ){
	if($n == 1){	//根据数学知识（规定），1的阶乘就是1
					//也就是说，如果“谁”要让“我”求１的阶乘，我直接就给出１
		return 1;
	}
	$result = jiecheng($n-1) * $n;	//如果谁要我求n（n大于1）的阶乘，我就依据
									//数学规则，再去找该函数并乘以n的结果
	return $result;
}
$v1 = jiecheng(6);
echo "v1 = $v1";
/*
分析执行过程：
$v1 = jiecheng(6)==> 
$v1 = jiecheng(5) * 6 ==>
$v1 = (jiecheng(4) * 5) * 6 ==>
$v1 = ((jiecheng(3) * 4) * 5) * 6 ==>
$v1 = (((jiecheng(2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((jiecheng(1) * 2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((1 * 2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((2) * 3) * 4) * 5) * 6 ==>
$v1 = (((6) * 4) * 5) * 6 ==>
$v1 = ((24) * 5) * 6 ==>
$v1 = (120) * 6 ==>
$v1 = 720
*/

/**
 * 该函数可以求斐波那契数列的第n项
 */
function  fbnq( $n ){
	$n1 = 1;	//数列的最初第1项，代表要求的某项的往前２项
	$n2 = 1;	//数列的最初第2项，代表要求的某项的往前１项
	$result = 0;	//结果
	for($i = 3; $i <= $n; $i++){	//从第3项开始
		$result = $n1 + $n2;
		$n1 = $n2;	//刚才的往前１项变成第２项了
		$n2 = $result;//刚才的最新值，就当作往前第１项了
		//上两行的目的是为了准备求“下一项”
	}
	return $result;
}
$v2 = fbnq(3);	//求第3项：
echo "<br />斐波那契第3项：" . $v2;
echo "<br />斐波那契第4项：" . fbnq(4);
echo "<br />斐波那契第7项：" . fbnq(7);
echo "<br />斐波那契第12项：" . fbnq(12);
?>

</body>
</html>
