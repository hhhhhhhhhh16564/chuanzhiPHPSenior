<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="04_get2.php" method="get">
		项目1:<input type="text" name="name">
		项目2:<input type="password" name="pwd">
		项目3:<input type="text" name="age">
		<br/>
		爱好:
		<input type="checkbox" name="hobby[]" value="足球">足球
		<input type="checkbox" name="hobby[]" value="篮球">篮球
		<input type="checkbox" name="hobby[]" value="中国足球">中国足球
		<br>
		<input type="submit" value="提交">	
	</form>
	<hr>
	<a href="04_get2.php?name=text1&pwd=123">文字。。。</a>


</body>
</html>