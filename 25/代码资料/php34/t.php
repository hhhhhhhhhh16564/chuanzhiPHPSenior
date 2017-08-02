<?php

$link = mysql_connect('127.0.0.1:3306', 'root', '1234abcd');



$data = "h%k";
$data = mysql_real_escape_string($data);
$data = str_replace(array('%', '_'), array('\%', '\_'), $data);
$where = "title like '$data%'";
echo $where;
