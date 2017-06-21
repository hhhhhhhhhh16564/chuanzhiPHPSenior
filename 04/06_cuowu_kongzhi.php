<?php
header("content-Type:text/html; charset=UTF-8");
$link = @mysql_connect("localhost","root", "12345678") or die();
var_dump($link);
?>