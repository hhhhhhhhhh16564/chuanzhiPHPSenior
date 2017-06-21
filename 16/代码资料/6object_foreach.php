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
	public $a1 = 1;
	protected $a2 = 2;
	private $a3 = 3;
	function fetchAllProp(){
		//遍历时，key取得属性名，value取得对应值
		foreach($this as $key => $value){
			echo "<br />属性: $key = $value";
		}
	}
	//$arr用于存储要取得的属性名的数组
	function fetchSomeProp($arr){
		foreach($this as $key => $value){
			//在数组$arr中找是否存在$key这个“值”
			if(  in_array($key, $arr)  ){
				echo "<br />属性: $key = $value";
			}
		}
	}
}
$o1 = new A();
$o1->fetchAllProp();
echo "<hr />";
$o1->fetchSomeProp( array('a1','a2') );
?>
</body>
</html>
