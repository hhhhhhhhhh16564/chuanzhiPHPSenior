<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

//1，连接数据库：
$mylink  =  mysql_connect("localhost",  'root',  '12345678');
//2，设定连接编码（通常是utf8）
mysql_set_charset("utf8");		//也可以使用：mysql_query("set names utf8");
//3，选择数据库（如有需要）
mysql_select_db("text");		//也可以使用：mysql_query("use  数据库名");
//4，执行sql命令。
//$result  =  mysql_query( "几乎任何sql语句 ");
if(1 == 2){
	$randName = rand(1000, 9999);	//获得一个随机数
	$sql = "insert into temptab1(id, name)values($randName, 'user_$randName');" ;	//基本上写好这条sql语句就可以
	$str = "asf'afas'fafs";	//上一行单引号在php中只是一个普通字符
	$result  =  mysql_query( $sql );	//执行该sql语句
	//返回的结果通常需要分两种情形进行处理：
	//4.1：如果是无返回数据的语句：
	//4.1.1 如果$result为true，表示执行成功
	if($result == true){
		echo "插入数据成功";
	}
	//4.1.2 如果$result为false，表示执行失败
	else{
		echo "失败，请参考失败提示信息：" . mysql_error();
	}
}

//下面开始执行select这种“返回数据”的语句，并显示结果
$sql = "select * from boy where id > 1";
$result = mysql_query($sql);	//这里如果执行成功，则被称为“数据集”（结果集）
if($result === false){
	echo "失败，请参考失败提示信息：" . mysql_error();
}
else{
	echo "<table border='1'>";
	while( $record = mysql_fetch_array( $result )){
		//mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
		//它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
		//该数组的下标就是该select的字段名，值就是对应行的数据值
		echo "<tr>";
		echo "<td>" . $record['id'] . "</td>";
		echo "<td>" . $record['name'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

//下面开始执行非select但返回数据的命令显示结果
$sql = "show databases;";	//换成“desc 表名”这个命令，也是得到数据
$result = mysql_query($sql);	//这里如果执行成功，则被称为“数据集”（结果集）
if($result === false){
	echo "失败，请参考失败提示信息：" . mysql_error();
}
else{
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Database</td>";
	echo "</tr>";
	while( $record = mysql_fetch_array( $result )){
		//mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
		//它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
		//该数组的下标就是该select的字段名，值就是对应行的数据值
		echo "<tr>";
		echo "<td>" . $record['Database'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

//下面开始执行非select但返回数据的命令显示结果
$sql = "show databases;";
$sql = "desc text;";
$sql = "select * from girl";
$result = mysql_query($sql);	//这里如果执行成功，则被称为“数据集”（结果集）
if($result === false){
	echo "失败，请参考失败提示信息：" . mysql_error();
}
else{
	$fieldCount = mysql_num_fields($result);	//得到结果集的字段个数
	echo "<table border='1'>";
	//输出表头部分，内容是字段名：
	echo "<tr>";
	for($i = 0; $i < $fieldCount; ++$i){	//在每一行中对所有列进行“遍历”
		$fieldName = mysql_field_name($result, $i);//从结果集中取的第i个字段的名字（i从0开始算起)
		echo "<td>" . $fieldName . "</td>";
	}
	echo "</tr>";
	while( $record = mysql_fetch_array( $result )){
		//mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
		//它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
		//该数组的下标就是该select的字段名，值就是对应行的数据值
		
		//echo "<tr>";
		//echo "<td>" . $record['Field'] . "</td>";
		//echo "<td>" . $record['Type'] . "</td>";
		//echo "</tr>";
		//上述代码要写若干项，但如果字段名（和字段个数）不确定，则怎么办？
		echo "<tr>";
		for($i = 0; $i < $fieldCount; ++$i){	//在每一行中对所有列进行“遍历”
			$fieldName = mysql_field_name($result, $i);//从结果集中取的第i个字段的名字（i从0开始算起)
			echo "<td>" . $record[$fieldName] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}










	 ?>
</body>
</html>