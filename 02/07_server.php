<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
 <?php 
echo "<pre>";
// var_dump($_SERVER);
echo "</pre>";
echo "<table border='1'>";
foreach ($_SERVER as $key => $value) {
	# code...
echo "<tr>";
echo "<td>$key</td>";
echo "<td>$value</td>";
echo "</tr>";
}
echo "</table>";

?>
</body>
</html>