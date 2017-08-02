<?php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php34';
$username = 'root';
$password = '1234abcd';
$driver_options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES UTF8',
	);
$pdo = new PDO($dsn, $username, $password, $driver_options);
// var_dump($pdo);


$sql = "show databases";
$result = $pdo->query($sql);//PDOStatement
// var_dump($result);

// $list = $result->fetchAll();
// $list = $result->fetchAll(PDO::FETCH_ASSOC);
$list = $result->fetchAll(PDO::FETCH_NUM);
echo '<pre>';
var_dump($list);