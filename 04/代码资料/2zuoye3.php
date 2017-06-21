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
$n1 = $n2 = "";	//连续赋值多个变量；

if($_POST){
	$n1 = $_POST['n1'];
	//$n2 = $_POST['n2'];
	$trans = $_POST['trans'];
	if($trans == "1"){
		$n2 = decbin((int)$n1);
	}
	else if($trans == "2"){
		$n2 = decoct((int)$n1);
	}
	else if($trans == "3"){
		$n2 = dechex((int)$n1);
	}
	else if($trans == "4"){
		$n2 = bindec($n1);	//要求参数是字符串
	}
	else if($trans == "5"){
		$n2 = octdec($n1);	//要求参数是字符串
	}
	else if($trans == "6"){
		$n2 = hexdec($n1);	//要求参数是字符串
	}
}
?>
<form action="" method="post">
	<input type="text" name="n1" value="<?php echo $n1; ?>" />
	<select name="trans" >
		<option value="1" >10to2</option>
		<option value="2" >10to8</option>
		<option value="3" >10to16</option>
		<option value="4" >2to10</option>
		<option value="5" >8to10</option>
		<option value="6" >16to10</option>
	</select>
	<input type="submit" name="submit1" value="转换" />
	<input type="text" name="n2" value="<?php echo $n2; ?>" />
</form>

<?php
//输出ASCII码的所有可见字符（编码为32-126的字符）
//提示：chr( n )可以获得编码为n的字符。
echo "<table border='1'>";
for($i = 32; $i <= 126; ++$i){
	echo "<tr >";
	echo "<td>{$i}：</td>";
	echo "<td>" , chr( $i ), "</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
