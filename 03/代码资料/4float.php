<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript">
		var v1 = 8.1/3;
		document.write("js中，8.1/3结果为：" + v1);
		if(v1 < 2.7){
			document.write("<br />js中，8.1/3小于2.7");
		}
		if( Math.round(v1 * 1000) == Math.round(2.7 * 1000)){//假设精度要求为3位小数 
			document.write("<br />js中，8.1/3等 于2.7（按3位精度）");
		}
		else{
			document.write("<br />js中，8.1/3 不 等 于2.7（按3位精度）");
		}
	</script>
</head>
<body>
<?php

$v1 = 8.1/3;
echo ("<hr />php中，8.1/3结果为：" . $v1);
if($v1 < 2.7){
	echo("<br />php中，8.1/3小于2.7");
}

if(round($v1 * 1000) == round(2.7 * 1000)){//假设精度要求为3位小数 
	echo("<br />php中，8.1/3等 于2.7（按3位精度）");
}
else{
	echo("<br />php中，8.1/3 不 等 于2.7（按3位精度）");
}
?>
</body>
</html>
