
<?php
mysql_connect("localhost", 'root','12345678');
mysql_set_charset("utf8");	//mysql_query("set names utf8;");
mysql_query("use text3;");
if($_POST){
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$age = $_POST['age'];
	$edu = $_POST['edu'];
	$fav = $_POST['fav'];	//注意：这是数组
	$come_from = $_POST['come_from'];
	if(empty($user_name) || empty($user_pass) ){
		$errMsg = "数据非法：用户名/密码不能为空。";
	}
	else{	//假设数据已经有效了
		//单独需要对$fav做处理：
		//该数据原始，类似这样的一个数组：array(1, 4), 或array(1,2, 8), 或array(8);
		//但存入数据库的时候，其实应该将他们每一项的值“相加”之后求和的结果，则：
		$favSum = array_sum($fav);
		$sql = "insert into user_list (user_name,user_pass,age,edu,fav,come_from,reg_time)values";
		$sql .= "('$user_name','$user_pass','$age','$edu','$favSum','$come_from',now())";
		$result = mysql_query($sql);
		if($result === false){
			$errMsg = "执行失败，请参考：" . mysql_error();
		}
		else{
			$errMsg = "添加成功。";
		}
	}
}
if($_GET){//
	if(!empty($_GET['ID'])){
		$id = $_GET['ID'];
		$sql = "delete from user_list where id=$id";
		$result = mysql_query($sql);
		if($result === false){
			$errMsg = "执行失败，请参考：" . mysql_error();
		}
		else{
			$errMsg = "删除成功。";
		}
	}
}
?>

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
<!--
//这是表结构
create  table  user_list(
	id int auto_increment key,
	user_name varchar(30) unique not null,
	user_pass char(32) not null,
	age tinyint unsigned,
	edu enum ('小学','中学','大学','研究上以上'),
	fav set ('排球','篮球','足球','中国足球','地球'),
	come_from enum('东北','华北','西北','华东','华南','华西'),
	reg_time datetime
	);


-->
<div class='errMsg'>
<?php
	if(!empty($errMsg)){
		echo $errMsg;
	}
?>
</div>
<form  action="" method="post">
	用户名：<input type="text" name="user_name" /><br />
	密码：<input type="password" name="user_pass" /><br />
	年龄：<input type="text" name="age" /><br />
	学历：<select name="edu">
				<option value="1" >小学</option>
				<option value="2" >中学</option>
				<option value="3" >大学</option>
				<option value="4" >研究上以上</option>
			</select><br />
	兴趣：
		<input type="checkbox" name="fav[]" value="1" />排球
		<input type="checkbox" name="fav[]" value="2" />篮球
		<input type="checkbox" name="fav[]" value="4" />足球
		<input type="checkbox" name="fav[]" value="8" />中国足球
		<input type="checkbox" name="fav[]" value="16" />地球
	<br />
	来自：
		<input type="radio" name="come_from" value="1" />东北
		<input type="radio" name="come_from" value="2" />华北
		<input type="radio" name="come_from" value="3" />西北
		<input type="radio" name="come_from" value="4" />华东
		<input type="radio" name="come_from" value="5" />华南
		<input type="radio" name="come_from" value="6" />华西
	<br />
		<input type="submit" value="提交" />
</form>

<hr />
<?php
$pageSize = 11;
$page = 1;	//最初默认就是第1页
if(!empty($_GET['page'])){
	$page = $_GET['page'];
}
$start = ($page-1)*$pageSize;	//起始行号
$sql = "select * from user_list where 1=1 order by id desc limit $start, $pageSize;";
$result = mysql_query($sql);
if($result === false){
	echo "数据获取失败";
}
else{
	$fileName = $_SERVER['SCRIPT_NAME'];
	while($rec = mysql_fetch_assoc($result) ){
		echo "[<a href='$fileName?ID={$rec['id']}'>删除</a>] ";
		echo $rec['id'] . "——" . $rec['user_name']. "——" . $rec['edu']. "——" . $rec['fav'] . "<br />";
	}
	echo "<br />";
	for($i = 1; $i <= 10; ++$i){
		echo "<a href='$fileName?page=$i'>$i</a> ";
	}
}
?>

</body>
</html>
