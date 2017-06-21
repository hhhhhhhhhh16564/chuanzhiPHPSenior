<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
//写一个页面server.php，并输出至少5个$_SERVER内的元素信息，并说明是什么含义，页面表现形式如下
$arr1 = array('PHP_SELF', 'DOCUMENT_ROOT', 'SERVER_NAME', 'REMOTE_ADDR', 'SERVER_ADDR');
$arr2 = array('网页路径', '站点路径', '服务器名', '客户段IP', '服务器端IP');
echo "<table border='1'>";
	echo "<tr>";
		echo "<td>PHP_SELF</td>";
		echo "<td>\$_SERVER['PHP_SELF']</td>";
		//echo "<td>{$_SERVER['PHP_SELF']}</td>";//另一做法：
		echo "<td>".$_SERVER['PHP_SELF']."</td>";
		echo "<td>当前网页路径</td>";
	echo "</tr>";
	//。。。。。。。这里可以继续写后面几项，但不是很理想的做法
echo "</table>";
//方法2：
$arr1 = array('PHP_SELF', 'DOCUMENT_ROOT', 'SERVER_NAME', 'REMOTE_ADDR', 'SERVER_ADDR');
$arr2 = array('网页路径', '站点路径', '服务器名', '客户段IP', '服务器端IP');
echo "<table border='1'>";
foreach($arr1  as $key => $value ){
	echo "<tr>";
		echo "<td>$value</td>";
		echo "<td>\$_SERVER['$value']</td>";
		echo "<td>" . $_SERVER[$value] . "</td>";
		echo "<td>" . $arr2[$key] . "</td>";
	echo "</tr>";
}
echo "</table>";
//方法3：
$arr1 = array(
	'PHP_SELF'=>'网页路径', 
	'DOCUMENT_ROOT'=>'站点路径', 
	'SERVER_NAME'=>'服务器名', 
	'REMOTE_ADDR'=>'客户段IP', 
	'SERVER_ADDR'=>'服务器端IP',
	'QUERY_STRING'=>'查询字符串',
	);
//$arr2 = array(, , , , );
echo "<table border='1'>";
foreach($arr1  as $key => $value ){
	echo "<tr>";
		echo "<td>$key</td>";
		echo "<td>\$_SERVER['$key']</td>";
		echo "<td>" . $_SERVER[$key] . "</td>";
		echo "<td>" . $value . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>