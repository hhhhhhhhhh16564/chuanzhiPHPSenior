<?php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php34';
$username = 'root';
$password = '1234abcd';
$driver_options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES UTF8',
	);
$pdo = new PDO($dsn, $username, $password, $driver_options);


// $sql = "show database";

// if (!$result = $pdo->query($sql)) {
// 	var_dump($pdo->errorInfo());
// 	echo '<br>';
// 	var_dump($pdo->errorCode());
// }
// var_dump($result);

// $sql = "insert into team values (null, '拜仁'), (NULL, '皇马')";
$sql = "update team set t_name='拜仁' where t_id=9";
if (false === $row_count = $pdo->exec($sql)) {
	//执行失败
} else {
	echo $row_count;
}

// echo $pdo->lastInsertID();