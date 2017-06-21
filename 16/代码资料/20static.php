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
	static $p1 = 1;
	static function showInfo(){//可继承
		//self代表当前类：指其代码所在的类（静态绑定）
		echo "<br />" . self::$p1;
	}
	static function showInfo2(){//可继承
		//static也代表“当前类”：调用本方法的类
		//static这个词有时候跟self代表同一个类，
		//也有时候代表不同的类：static代表的是调用者（动态绑定）
		//通常认为，这种情形更符合现实的需要
		//可见self完全可以被static代替使用。
		echo "<br />" . static::$p1;
	}
}
class B extends A{
	static $p1 = 10;//进行了属性覆盖
}
A::showInfo();//毫无疑问：1
B::showInfo();//？？？结果是1
			//因为self永远代表其所在代码的类
echo "<hr />";
A::showInfo2();//结果是1
B::showInfo2();//结果是10

?>
</body>
</html>
