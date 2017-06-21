<?php
class A{}
class B extends A{}
$o1 = new A();
$o2=  new B();
$s1 = $o1 instanceOf A;
$s2 = $o1 instanceOf B;
var_dump($s1, $s2);
echo "<hr />";
$s3 = $o2 instanceOf B;//毫无疑问：true
$s4 = $o2 instanceOf A;//???结果为：true
//一个对象如果是下级某个类的“实例”
//则其一定也是该类的上级类的“实例”
var_dump($s3, $s4);