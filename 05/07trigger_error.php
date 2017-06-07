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

ini_set('display_errors', true);
// ini_set("error_reporting", E_ALL& ~E_NOTICE);

ini_set("log_errors" , On);		//或者Off
ini_set("error_log", 'err1.log');	//后缀随便用


echo "<h3>3中常见的用户错误</h3>";
trigger_error("用户提示性错误1", E_USER_NOTICE);
trigger_error("用户警告性错误2", E_USER_WARNING);
//trigger_error("用户严重错误3", E_USER_ERROR);

//假设用户输入的年龄数据为$age
$age = 188;
if($age >= 0 && $age <= 100){
	echo "<br />年龄合乎逻辑，继续处理后续工作....";
}
else{
	trigger_error("年龄数据不符合要求！", E_USER_WARNING);
}

echo $hhh;



?>
</body>
</html>
