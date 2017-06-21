<?php
$link = mysql_connect("localhost","root","123");
mysql_query("set names utf8");
mysql_query("use php34");
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
if($_POST){
	$u1 = $_POST['chu'];
	$u2 = $_POST['jin'];
	$qian = $_POST['qian'];
	mysql_query("start transaction;");
	$sql1 = "update money set cunkuan = cunkuan-$qian where zhanghu='$u1';";
	$sql2 = "update money set cunkuan = cunkuan+$qian where zhanghu='$u2';";
	$result1 = mysql_query($sql1);
	$err1 = mysql_error();
	$result2 = mysql_query($sql2);
	$err2 = mysql_error();
	if($result1 === false || $result2 === false){
		mysql_query("rollback;");
		echo "转账失败：" . $err1 . $err2 ;
		echo "<br />失败语句1为：" . $sql1;
		echo "<br />失败语句2为：" . $sql2;
	}
	else{
		mysql_query("commit;");
		//echo "转账成功！";
		//换成下面的写法，则页面就会当作“全新页面”（而不是提交后页面）
		$str = <<<ABCD
			<script>
				alert('转账成功！');
				//document.write("转账成功！");这个方式不能输出到页面，因为下一行就跳转
				location.href = '1day12_zuoye.php?msg=1';
			</script>
ABCD;
			echo $str;
			die();
	}
}

if(!empty($_GET['msg'])){
	if($_GET['msg'] == '1'){
		echo "转账成功";
	}
	else if($_GET['msg'] == '2'){
		echo "存款成功";
	}
	else if($_GET['msg'] == '3'){
		echo "销户成功";
	}
}

?>
<form  action="" method="post">
	转出账户: <Input type="text"  name="chu"  /><br />
	转入账户: <Input type="text"  name="jin"  /><br />
	转出资金: <Input type="text"  name="qian"  /><br />
	<input type="submit" value="提交" />
</form>
<h3>当前资金情况</h3>
<?php
$sql = "select * from money;";
$result = mysql_query($sql);
if($result === false){
	echo "执行失败：" . mysql_error();
}
else{
	echo "<table border='1' >";
	while ( $rec = mysql_fetch_array($result)){
		echo "<tr >";
		echo "<td>{$rec['zhanghu']}</td>";
		echo "<td>{$rec['cunkuan']}</td>";
		echo "</tr>";
	}
}
?>
</body>
</html>
