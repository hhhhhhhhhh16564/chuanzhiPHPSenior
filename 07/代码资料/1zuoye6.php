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
//利用上一道题的逻辑思路，写一个函数，该函数能够判断一个数字是否是一个素数（是就返回true，否则就返回false）。
//再利用该函数，输出2-200之间的所有素数。
function isPrime( $n ){
	//找出有几个能整除的数
	$count = 0;
	for($i = 1; $i <= $n; $i++){
		if($n % $i == 0){
			$count++;
		}
	}
	//如果只有2个能整除，则该数就是素数
	if($count == 2){
		return true;
	}else{
		return false;
	}
}
//这个是优化（高效）的做法
function isPrime2( $n ){
	for($i = 2; $i <= pow($n,0.5); $i++){
		if($n % $i == 0){//只要发现一个可以整除的，就false
			return false;
		}
	}
	return true;
}
$max = 200;
echo "<br />";
$t1 = microtime(true);	//获取当前时间，精确到1/10000秒
for($i = 2; $i <= $max; ++$i){
	if( isPrime($i) == true){
		echo $i . " ";
	}
}
$t2 = microtime(true);	
echo "<br />";
for($i = 2; $i <= $max; ++$i){
	if( isPrime2($i) == true){
		echo $i . " ";
	}
}
$t3 = microtime(true);	
echo "<br />时间1：" . ($t2-$t1);
echo "<br />时间2：" . ($t3-$t2);

echo "<hr />";
/*
写2个函数，分别可以求得两个正整数的最大公约数和最小公倍数。
提示：
最大公约数就是能够同时整除该两个数的最大的那个。比如24和36的最大公约数是12
最小公倍数就是能够同时被该两个数整除的最小的那个。比如24和36的最小公倍数是72
*/
function gongyueshu($m, $n){
	$max = 1;
	$min = $m < $n ? $m : $n;	//找出较小的那个
	for($i = 1; $i <= $min; $i++){
		if($m % $i == 0 && $n % $i == 0){
			$max = $i;
		}
	}
	return $max;
}
//效率更高的做法
function gongyueshu2($m, $n){
	$min = $m < $n ? $m : $n;	//找出较小的那个
	for($i = $min; $i >= 1; $i--){
		if($m % $i == 0 && $n % $i == 0){
			return $i;	//从大到小找，找到的第一个就是！
		}
	}
}
//最小公倍数就是能够同时被该两个数整除的最小的那个。比如24和36的最小公倍数是72
function gongbeishu($m, $n){
	$max = $m > $n ? $m : $n;	//找出较大的那个
	for($i = $max; $i > 0; $i+=$max){//这里虽然是一个死循环，但肯定能找到并跳出
		if($i % $m == 0 && $i % $n == 0){//找到的第一个这就是最小公倍数
			return $i;
		}
	}
	//return ??;	//上述for循环肯定能够找到
}
//利用上一个求最小公倍数以及数学知识：
//最小公倍数=数1*数2/最大公约数，得到一个更高效的方法。
function gongbeishu2($m, $n){
	return $m*$n/gongyueshu2($m,$n);
}
$t4 = microtime(true);	

//写一个函数，该函数可以将给定的任意个数的参数以指定的字符串串接起来成为一个长的字符串。
//该函数带2个或2个以上参数，其中第一个参数是用于将其他参数进行串联的连接字符串。比如调用该函数：
//chuanlian(“-”, “ab”, “cd”, “123”);	//得到结果为字符串：”ab-cd-123”
function chuanlian(){
	$arr = func_get_args();	//得到所有实参
	$s1 = $arr[0];	//也可以func_get_arg(0);
	$count = count($arr);	//长度，也可以：func_num_args();
	$result = $arr[1];		//先取得第一项数据
	for($i = 2; $i < $count; $i++){//再从第2项数据开始往后遍历
		$result .= $s1 . $arr[$i];	//
	}
	return $result;
}

//另一个做法：
//作者：徐刚 10:38:02
function implode_array()
{
	$func_args = array_slice(func_get_args(),1,null,true);
	$glue = func_get_arg(0);
	return implode($glue, $func_args);
}

//使用递归法和递推法（迭代法）求n的阶层（n为任意给定的大于等于1的整数）。
$n = 6;//目标：要求6的阶层
$jc = 1;	//代表已知的1的阶乘，也代表“某个数的前一个数的阶层”
for($i = 2; $i <= $n; $i++){
	$result = $jc * $i;	//求得当前i的阶乘
	$jc = $result;//这里把当前项的值赋值给$jc,目的是为了求下一项的时候，当作“前一项”
}
echo "<br />$n 的阶乘为：$result";

//数列如下：【1】，【2】，3，6，9，18，27… ，用递归求第20项的值是多少？
//（注意，规律就是第n个数是第n-2个数的3倍，已知第一个是1，第二个是2）。
function shulie( $n ){
	if($n == 1){
		return 1;
	}
	else if($n == 2{
		return 2;
	}
	return shulie($n-2) * 3;
}

//用递推来实现：（更好）
//徐刚 10:53:16
function iterative_seq($n)
{
	$n_arr[1] = 1;
	$n_arr[2] = 2;
	for ($i=3; $i <= $n; $i++) {
		$n_arr[$i] = $n_arr[$i-2]*3; 
	}
	return $n_arr[$n];
}

?>
</body>
</html>
