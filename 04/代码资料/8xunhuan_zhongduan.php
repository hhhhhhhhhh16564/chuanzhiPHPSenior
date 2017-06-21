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

for($i = 1; $i <= 9; ++$i){	//循环A
	for($k = 1; $k <= $i; ++$k){//循环B
		if( $i == 5){
			break 2;	//完全终止循环A
		}
		echo "&nbsp; &nbsp; $k x $i = " . $i*$k;
	}
	echo "<br />";
}

for($i = 1; $i <= 9; ++$i){	//循环A
	for($k = 1; $k <= $i; ++$k){//循环B
		if( $i == 5){
			break 1;	//完全终止循环B
		}
		echo "&nbsp; &nbsp; $k x $i = " . $i*$k;
	}
	echo "<br />";
}
for($i = 1; $i <= 9; ++$i){	//循环A
	for($k = 1; $k <= $i; ++$k){//循环B
		if( $i == 5){
			continue 1;	//停止本循环体中后续语句
		}
		echo "&nbsp; &nbsp; $k x $i = " . $i*$k;
	}
	echo "<br />";
}

//思考题：
echo "<hr />";
for($i = 1; $i <= 10; $i++){
	if($i % 3 == 0){
		continue;
	}
	if($i == 9){
		break;
	}
	echo $i . " ";
}
echo $i;
//最终输出数字为：
/*
1 2 4 5 7 8	//2
1 2 4 5 7 8 10 ；//2
1 2 4 5 6 7 8 10 ；
1 2 4 5 7 8 10 10
1 2 4 5 7 8 10 11	//3
1 2 3 4 5 6 7 8 9
1 2 4 5 7 8 9 
1 2 
*/
?>
</body>
</html>
