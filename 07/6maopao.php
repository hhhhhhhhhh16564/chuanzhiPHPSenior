<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<body>
<?php
$arr2 = array( 5,  15,  3,  4, 9, 11);
$len = count($arr2);
//1， 需要进行n-1趟的“冒泡”比较过程。
echo "<br />排序之前：";
print_r($arr2);
for($i = 0; $i < $len-1; ++$i){	//设定比较的趟数
	//2， 每一趟的比较都前一趟少比一次，第一趟需要比较n-1次
	for($k = 0; $k < $len-1-$i; ++$k){	//设定本趟比较的次数
		//这里要实现下标为$k和下标为$k+1这两项的比较：
		if($arr2[$k] > $arr2[$k+1]){
			$temp = $arr2[$k];
			$arr2[$k] = $arr2[$k+1];
			$arr2[$k+1] = $temp;
		}
	}
}
echo "<br />排序之后：";
print_r($arr2);
?>
</body>
</html>
