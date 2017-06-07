<?php
header("content-Type:text/html; charset=UTF-8");
$r1 = 9 & 13;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";


$r1 = 18 | 10;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";


$r1 = 9 << 2;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";

$r1 = 9 >> 2;	//虽然是位运算，但数字是可以用10进制
echo "<br />r1 = $r1";

?>