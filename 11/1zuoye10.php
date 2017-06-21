<?php 
	mysql_connect('localhost', 'root', '12345678');
	mysql_set_charset('utf8');
	mysql_query('use text3');
if ($_POST) {
	$name = $_POST['name'];
	$grade = $_POST['grade'];
	$pass = $_POST['pass'];
	$fav = $_POST['fav'];
	$come_from = $_POST['come_from'];
	$introduce = $_POST['introduce'];
	// echo $_POST;
	 //    create table if not exists stu_info (
	 //    id int auto_increment key,
		// name varchar(20) not null unique,
		// pass varchar(20) unique,
		// grade enum ('小学', '初中', '高中', '大学'),		
		// fav set ('篮球', '足球', '乒乓球', '网球', '排球'),
		// come_from enum ('日本', '美国', '中国', '朝鲜'),
		// introduce varchar(3000),
		// reg_time datetime
		// );
     $emessage = "";
	if (empty($name) || empty($grade)) {
		$emessage = '用户名或密码不能为空';
	}else{
     $favnum = array_sum($fav);

     $introduce = "我是" . $name. "你们好";
     // echo $name, $grade, $pass, $favnum, $come_from, $introduce;
    $sql = "insert into stu_info (name, pass, grade, fav, come_from, introduce, reg_time) values";
    $sql .= "('$name', '$pass', '$grade', '$favnum', '$come_from', '$introduce', now())";
// echo "$sql";
  $result = mysql_query($sql);
  if ($result === false) {
  		$emessage = "执行失败 " . mysql_error();
  }else{
  	$emessage = "添加成功";
  }
	}
}
if (!empty($_GET['id'])) {
 $sql = "delete from stu_info where id = {$_GET['id']}";
 // echo "$sql";
 
$result = mysql_query($sql);
		if($result === false){
			$emessage = "执行失败，请参考：" . mysql_error();
		}
		else{
			$emessage = "删除成功。";
		}

}
 ?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<?php 
		if (!empty($emessage)) {
			
			echo $emessage;
		}

		 ?>

	</div>


	<form method="post">
		用户名: <input type="text" name="name"/>
		<br/>
	     密码: &nbsp;&nbsp;&nbsp;<input type="pass" name="pass">
		<br/>
		学历：<select name='grade'>
			<option value='1' selected="selected">小学</option>
			<option value="2">初中</option>
			<option value="3">高中</option>
            <option value="4">大学</option>

		</select>

		<br/>
		爱好：
		<input type="checkbox" value="1" name="fav[]"/>篮球
		<input type="checkbox" value="2" name="fav[]"/>足球
		<input type="checkbox" value="4" name="fav[]"/>乒乓球
		<input type="checkbox" value="8" name="fav[]"/>网球
		<input type="checkbox" value="16" name="fav[]" checked="checked" />排球
		<br/>
		籍贯：
		<input type="radio" value='1' name="come_from"/> 日本
		<input type="radio" value="2" name="come_from" checked="checked" /> 美国
		<input type="radio" value="3" name="come_from"/> 中国
		<input type="radio" value="4" name="come_from"/> 朝鲜
		<br/>

		自我介绍:<br/>
		<textarea cols="50" rows="10" name = "introduce">
		
		</textarea>
		<br/><br/><br/>
		<input type="submit" value = "提交">
		<br/>
		<input type="reset" value="重新填写">

	</form>
 <hr/>

  <?php 


  $page = 1;

  if (!empty($_GET['page'])) {
  	$page = $_GET['page'];
  }
  $couunt = 3;
  $start = ($page-1) * $couunt;
  $sql = "select * from stu_info where 0 order by id desc limit $start, $couunt";

// echo $sql;
$result = mysql_query($sql);

$rec = mysql_fetch_assoc($result);

if ($rec) {
	
	echo "有值";
}else{
	echo "没有值";
}
echo "<br/>";

$fileName = $_SERVER['SCRIPT_NAME'];

  if ($result === false) {
  	// echo "查询错误";
  }else{
  	while ($rec = mysql_fetch_assoc($result)) {
echo "<a href='$fileName?id={$rec['id']}'> 删除 </a>";
  		echo '姓名:'. $rec['name']. '----------班级：'. $rec['grade'] . '---------兴趣：'.  $rec['fav'] . '---------介绍: '. $rec['introduce'];
 echo "<br/>";
  	}
  }
// echo "$fileName";
echo "<br/>";
for ($i=1; $i <= 10; $i++) { 
  echo "<a href='$fileName?page=$i'> $i </a>";
}
   ?>








	
</body>
</html>















