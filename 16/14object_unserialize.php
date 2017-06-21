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
function __autoload($classname){
	require './' . $classname  .".class.php";
}
$str = file_get_contents('./mysqldb.txt');
$obj1 = unserialize($str);
//$obj1->connect();
//$obj1->setCharset('utf8');
//$obj1->selectDB('php34');
echo "<pre>";
var_dump($obj1);
echo "</pre>";
$sql = "select * from money;";
$result = $obj1->getAll($sql);
var_dump($result);
?>
</body>
</html>
