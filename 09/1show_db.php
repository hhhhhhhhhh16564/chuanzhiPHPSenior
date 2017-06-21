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
mysql_connect("localhost", "root" ,'12345678');
mysql_set_charset("utf8");

$sql = "show databases;";
$result = mysql_query($sql);
if($result === false){
	echo "执行失败";
}
else{

	$fieldCount = mysql_num_fields( $result ); //取得结果集的列数

	echo "<table border='1'>";
	//表头
	echo "<tr>";
	for($i = 0;  $i < $fieldCount; ++$i){
		$fieldName = mysql_field_name($result, $i);//取得第i个列名;
		echo "<th>" . $fieldName . "</th>";
	}
	echo "<th>动作</th>";
	echo "</tr>";

	while( $rec = mysql_fetch_assoc( $result ) ){
		echo "<tr>";
		for($i = 0;  $i < $fieldCount; ++$i){
			$fieldName = mysql_field_name($result, $i);//取得第i个列名;
			echo "<td>" . $rec[$fieldName] . "</td>";
			echo "<td><a href='2show_table.php?db={$rec[$fieldName]}'>查看表</a></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

?>
















</body>
</html>
