<?php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php34';
$username = 'root';
$password = '1234abcd';
$driver_options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES UTF8',
	);
$pdo = new PDO($dsn, $username, $password, $driver_options);

// $sql1 = "insert into team values (null, '国安')";
// $sql2 = "insert into team values (null, '绿地')";
// $sql3 = "insert into team values (null, '恒大')";
// $sql4 = "insert into team values (null, '建业')";
// $sql5 = "insert into team values (null, '鲁能')";
// $sql6 = "insert into team values (null, '申花')";

//预编译
// $sql = "insert into team values (null, ?)";
$sql = "insert into team values (null, :team_name)";
$stmt = $pdo->prepare($sql);
//绑定
// $stmt->bindValue(1, '国安');
// $stmt->bindValue(':team_name', '国安');

// //zhixing
// $result = $stmt->execute();
// var_dump($result);

$data_list = array(
	array('name'=>'国安'),
	array('name'=>'绿地'),
	array('name'=>'恒大'),
	array('name'=>'建业'),
	array('name'=>'鲁能'),
	array('name'=>'申花'),
	);
foreach($data_list as $row) {
	//绑定
	// $stmt->bindValue(1, '国安');
	$stmt->bindValue(':team_name', $row['name']);

	//zhixing
	$result = $stmt->execute();
	var_dump($result);
}