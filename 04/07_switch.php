<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//课堂/课间案例：
//任意给出一个年份和一个月份，输出该月的天数
$year = 2012;
$month= 2;

switch($month){
	case 1:
		echo "31天";
		break;
	case 2:
		if( isRunnian($year)){
			echo "29天";
		}
		else{
			echo "28天";
		}
		break;
	case 3:
		echo "31天";
		break;
	case 4:
		echo "30天";
		break;
	case 5:
		echo "31天";
		break;
	case 6:
		echo "30天";
		break;
	case 7:
		echo "31天";
		break;
	case 8:
		echo "31天";
		break;
	case 9:
		echo "30天";
		break;
	case 10:
		echo "31天";
		break;
	case 11:
		echo "30天";
		break;
	case 12:
		echo "31天";
		break;
	default :
		echo "月份数据有误";

}
//方法2：
echo "<hr />";

switch($month){
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:
		echo "31天";
		break;
	case 2:
		if( isRunnian($year)){
			echo "29天";
		}
		else{
			echo "28天";
		}
		break;
	case 4:
	case 6:
	case 9:
	case 11:
		echo "30天";
		break;
	default :
		echo "月份数据有误";

}

//方法3
echo "<hr />";
//if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){

//		echo "31天";
//}
if($month < 1 || $month > 12){	//月份不在1-12之间
	echo "月份数据有误";
}
else if($month == 4 || $month == 6 || $month == 9 || $month == 11){
		echo "30天";
}
else if($month == 2){
	if( isRunnian($year)){
		echo "29天";
	}
	else{
		echo "28天";
	}
}
else{
	echo "31天";
}


//判断一个年份是否为闰年
//如果是，返回true，否则返回false
function isRunnian($y){
	if($y % 4 == 0 && $y % 100 != 0  || $y % 400 == 0){
		return true;
	}
	else{
		return false;
	}
}




	 ?>


</body>
</html>