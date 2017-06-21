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
//输出杨辉三角图
$n = 8;
echo "<pre>";
for($i = 1; $i <= $n; ++$i){
	for($k = 1; $k <= $i; ++$k){
		if($k == 1 || $k == $i){//对于每一行的最前最后一个
			$arr[$i][$k] = 1;
		}
		else{//对于其他数据：根据规律要找“前一行”数据
			if($i > 1){//如果是非第一行：一般规律
				//实际上，这个if($i > 1)的判断，根据后面else中的分析，是没必要写的
				$arr[$i][$k] = $arr[$i-1][$k] + $arr[$i-1][$k-1];
			}
			else{
				//这里，本来是应该处理“第一行”的情况，
				//但是：对于第一行，在前面的if($k == 1 || $k == $i)
				//中，已经包括该情况，即根本不会进入本else语句块
				//如果想不清楚，你就干脆：$arr[1][1] = 1;
			}
		}
		echo $arr[$i][$k];
		echo "\t";
	}
	echo "<br />";
}
echo "</pre>";

//猴子吃桃问题：
/*
分析：
天		数量
10		1
9		(1+1)*2=4
8		(4+1)*2=10
7		(10+1)*2=22
。。。。。。
第n天   （第n+1天的个数+1）*2
*/
//功能：获取到第n天的桃子数
function taozi( $n){
	if( $n == 10) return 1;
	return (taozi($n+1) + 1) * 2;	//一般规律
}
echo "第一天的桃子数为：" . taozi(1);

//使用递推来实现：
$yestoday = 1;	//表示前一天的桃子数，当然也表示已知的第10天（初值）
for($i = 9; $i >= 1; --$i){
	$result = ($yestoday+1)*2;
	$yestoday = $result;
}
echo "<br />第一天的桃子数为：" . $result;
//理解一下以下代码：
$result = 1;
for($i = 9; $i >= 1; --$i){
	$result = ($result+1)*2;
}
echo "<br />第一天的桃子数为：" . $result;
//再理解一下以下代码：
for($i = 10; $i >= 1; --$i){
	$result = $i==10 ? 1 : ($result+1)*2;
}
echo "<br />第一天的桃子数为：" . $result;

echo "<br />第5天的桃子数为：" . taozi(5);
?>
</body>
</html>
