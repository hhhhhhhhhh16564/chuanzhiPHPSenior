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
//求该数组中的最大值：
$arr1 = array(3, 5,  6, 2,  9, 4);
$max = $arr1[0];	//先取得该数组中的第一项的值
					//并意图用改变了存储最终的结果
$len = count($arr1);
for($i = 0; $i < $len; $i++){//遍历循环每一项的值出来
	if( $arr1[$i] > $max ){	//如果发现某一项的值比$max大
		$max = $arr1[$i];	//赶紧装起来
	}
}
echo "<br />最大值为：$max";


//求该数组中的最大值：
$arr2 = array(
			array(3, 5,  6, 33,44,55), 
			array(2,  9, 4, 22),
			array(5, 2, 11),
		);
$max = $arr2[0][0];	//同样取出第一个数据
$len = count($arr2);	//
for($i = 0; $i < $len; ++$i){
	$len2 = count($arr2[$i]);	//取得其中某个数组的长度
	for($j = 0; $j < $len2; ++$j ){//继续对该“内部的数组”遍历
		if($arr2[$i][$j] > $max ){
			$max = $arr2[$i][$j];
		}
	}
}
echo "<br />最大值为：$max";
?>
</body>
</html>
