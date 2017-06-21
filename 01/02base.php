<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
$i = 10;
$i++;

echo "<h2>abce--$i</h3>";
echo date("Y-m-d H:i:s");

$con = mysql_connect("localhost","root","12345678");
echo "<hr/>";
var_dump($con);

phpinfo();

 ?>
	
</body>
</html>