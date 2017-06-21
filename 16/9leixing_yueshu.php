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

function f2(array $a){
	$c = count($a);//求数组的长度
	return $c;
}
$r1 = f2( array(1,2,5,4)  );
echo "<br />长度为：$r1";
$r2 = f2( 5  );
echo "<br />长度为：$r2";


class A{}
function f1( A $p1  ){
	echo "<br />";
	var_dump($p1);
}
f1(3);
f1('abc');
$o1 = new A();
f1($o1);


?>
</body>
</html>
