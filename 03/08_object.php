<?php
header("content-Type:text/html; charset=utf8");
//定义一个“人”类
class Person{

    public  $name = "xioaming";
    public  $age = 18;
    public  function intorme(){
        echo "hell0";
        echo "我叫".$this->name;
        echo ", 我今年". $this->age."岁";

    }

}

$person= new Person();
$person->name = "小明";
$person->age = 888;

$person->intorme();





		//让这个人自我介绍
?>