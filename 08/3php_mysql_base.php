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
//1，连接数据库：
$mylink  =  mysql_connect("localhost",  'root',  '12345678');
//2，设定连接编码（通常是utf8）
mysql_set_charset("utf8");
mysql_select_db("text");

$sql = "select * from boy";

$result = mysql_query($sql);

if ($result === false) {
	
	echo "失败，请参考失败提示信息: " . mysql_errno();
}else{

	echo "<table border='1' >";

	while ($record = mysql_fetch_array( $result)) {
		echo "<tr>";
		echo "<td>" . $record["hid"] . "</td>";
		echo "<td>" . $record["name"] . "</td>";
		echo "</tr>";
	}

	echo "</table>";
}



$sql = "desc boy";

$result = mysql_query($sql);
if ($result === false ) {
	
	echo "失败, 请参考失败提示信息: " . mysql_errno();
}else{

	echo "成功成功成功 ";
	//得到结果集的字段个数
	$fildCount = mysql_num_fields($result);
	echo "<table border='1' Cellpadding = '5' Cellspacing = '0'>";


	echo "<tr>";
	for ($i=0; $i < $fildCount; $i++) { 
		$fileName = mysql_field_name($result, $i);

		echo "<td>" . $fileName . "</td>";


	}
	echo "</tr>";

	
	while ($record = mysql_fetch_array($result)) {

		echo "<tr>";

		for ($i=0; $i<$fildCount; $i++) { 
			$fieldName = mysql_field_name($result, $i);

			echo "<td>" . $record[$fieldName] . "</td>";


		}




		echo "</tr>";

	}



	echo "</table>";

}


















































?>
</body>
</html>
