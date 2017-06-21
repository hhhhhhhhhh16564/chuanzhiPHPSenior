<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$v1 = 1;
	$v2 = $v1;
	$v3 = $v1+10;
	$v2++;
echo "<br />v1=$v1, v2=$v2";

echo "<br />";
echo "<br />";
echo "<br />";


$v10 = 10;
$v20 = &$v10;
$v20++;

echo "<br />v10=$v10, v20=$v20";

echo "<br />";
unset($v20);
echo "<br />v10=$v10, v20=$v20";



	 ?>
</body>
</html>