<?php
require 'MySQLDB.class.php';
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
<?php
//先设想：
$config = array(
	'host'=>'localhost',
	'port'=>'3306',
	'username'=>'root',
	'password'=>'123',
	'charset'=>'utf8',
	'dbname'=>'php34',
	);
$link = MySQLDB::getInstance( $config );
//var_dump($link);

//任务1；插入数据：
$sql = "insert into money (zhanghu, cunkuan)values('test3',10000)";
//if($link->query($sql)){
//	echo "执行成功";
//}

//任务2；获取所有帐户信息：
$sql = "select * from money;";
$result = $link->getAll($sql);	//得到的是二维数组
echo "<pre>";
//print_r($result);
//放入表格：
	echo "<table border='1'>";
		foreach($result as $row){
			echo "<tr>";
			foreach($row as $key => $value){
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
echo "</pre>";

//任务3；获取某个帐户信息（一行数据）：
$sql = "select * from money where id = 1;";
$result = $link->getRow($sql);	//得到的是一维数组
if($result){
	echo "<br />账户ID为：" . $result['id'];
	echo "<br />账户名为：" . $result['zhanghu'];
	echo "<br />存款为：" . $result['cunkuan'];
}
else{
	echo "<br />账户不存在";
}

//任务3；获取该银行的所有存款总和：
$sql = "select sum(cunkuan) as s from money;";
$result = $link->getOne($sql);	//得到的是一个数据
echo "<br />总存款为：" . $result;
?>
</body>
</html>
