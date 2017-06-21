<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$v1 = 1;
	$v2 = null;
	if (isset($v2)) {
		echo "<br/> v2存在";
	}

    if (isset($v3)) {
		echo "<br/> v3存在";
	}


	if (isset($v1)) {
		echo "<br/> v1存在";
	}


	 ?>


</body>
</html>