	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php

$arr2 = array( 5,  15,  3,  4, 9, 11);
$len = count($arr2);
echo "<br />排序之前：";
print_r($arr2);
//要进行找出最大值所在项的趟数
for($i = 0; $i < $len-1; ++$i){	//设定比较的趟数
	//每一趟要找的数据的个数都比前一趟少一个，第1趟要找n个
	$max = $arr2[0];	//取得第一项，并以之当作存储最大值的变量
	$maxPos = 0;		//取得第一项的下标，并当作存储最大值对应下标的变量
	for($k = 0; $k < $len-$i; ++$k){
		//这里开始对从0到$len-$i这些元素进行“找最大值及其下标”
		if($arr2[$k] > $max){
			$max = $arr2[$k];	//存储最大值
			$maxPos = $k;		//并同时存储对应下标
		}
	}
	//开始做交换（只有循环结束后，才可以确定最大值及其下标）：
	$temp = $arr2[$maxPos];	//这里不可以使用$temp = $max;
							//我们不是要交换max和别的
							//而是要交换数组的两个元素
	$arr2[$maxPos] = $arr2[$len-1-$i];//$len-1-$i就是“当前查找数据的最后一个位置”
	$arr2[$len-1-$i] = $temp;
}
echo "<br />排序之后：";
print_r($arr2);
?>
</body>
</html>
