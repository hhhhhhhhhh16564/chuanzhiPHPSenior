<?php

return array(
	'db' 	=> array(//数据库信息组
		'host'		=> '127.0.0.1',	
		'port' 		=> '3306',
		'username'	=> 'shop34', 
		'password'	=> '1234abcd', 
		'charset'	=> 'utf8',
		'dbname'	=> 'shop34',
		),
	'app' 	=> array(//应用程序组
		'dao'					=> 'pdo',//pdo,mysql
		'table_prefix'			=> 'p34_',//表前缀
		'default_platform'		=> 'back',
		),
	'back'	=> array(//后台组
		'default_controller' 	=> 'Manage',
		'default_action'		=> 'index',
		),
	'front'	=> array(//前台组
		)
	);