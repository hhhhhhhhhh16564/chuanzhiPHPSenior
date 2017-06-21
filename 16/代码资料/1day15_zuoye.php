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
/*
〉〉〉：
设计如下几个类：
商品类，有名称，有价钱，库存数，可显示自身信息（名称，价钱）。
手机类，是商品的一种，并且有品牌，有产地，可显示自身信息。
图书类，是商品的一种，有作者，有出版社， 可显示自身信息。
创建一个手机对象，并显示其自身信息；
创建一个图书对象，并显示其自身信息；
*/
abstract class shangpin{
	public $name ;
	public $price;
	public $store;
	function __construct($name, $price, $store){
		$this->name = $name;
		$this->price = $price;
		$this->store = $store;
	}
	function showInfo(){
		echo "<hr />商品名称：$this->name";
		echo "<br />商品价格：$this->price";
		echo "<br />商品库存：$this->store";
	}
}
class Mobile extends shangpin{
	public $pinpai;
	public $chandi;
	function __construct($name, $price, $store,$pinpai, $chandi){
		parent::__construct($name, $price, $store);
		$this->pinpai = $pinpai;
		$this->chandi = $chandi;
	}
	function showInfo(){
		parent::showInfo();
		echo "<br />商品品牌：$this->pinpai";
		echo "<br />商品产地：$this->chandi";
	}
}
$mobile1 = new Mobile('诺基亚3210',2000,22,'诺基亚Nokia', '天津');
$mobile1->showInfo();
?>
</body>
</html>
