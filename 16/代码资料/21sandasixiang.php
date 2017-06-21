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
class A{
	private $_age = 0;
	function setAge($age){
		if($age >= 0 && $age <= 127){
			$this->_age = $age;
		}
		else{
			trigger_error("干嘛呢？年龄不能乱写！", E_USER_ERROR);
		}
	}
	function getAge(){
		return $this->_age;
	}
}
$o1 = new A();
//$o1->_age = 18;//这样不行：
$o1->setAge(18);	//这样可以
echo "<br />年龄为：" . $o1->getAge();
?>
</body>
</html>
