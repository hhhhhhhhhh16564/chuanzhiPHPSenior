<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
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


	 ?>
</body>
</html>