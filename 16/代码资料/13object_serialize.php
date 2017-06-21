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
$config = array(
	'host'=>'localhost',
	'port'=>'3306',
	'username'=>'root',
	'password'=>'123',
	'charset'=>'utf8',
	'dbname'=>'php34',
	);
function __autoload($classname){
	require './' . $classname  .".class.php";
}
$my = MySQLDB::getInstance($config);//得到一个对象
$str = serialize($my);
file_put_contents('./mysqldb.txt', $str);
echo $str;
?>
</body>
</html>
