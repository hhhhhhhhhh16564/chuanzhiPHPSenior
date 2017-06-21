<?php

// 完成数据处理
//通过数据操作，将比赛列表需要的数据处理
//初始化MySQLDB
$config = array('host' => '127.0.0.1',	'port' => '3306', 'username'=>'root', 'password' => '1234abcd', 'charset'=>'utf8', 'dbname'=>'php34');
require './MySQLDB.class.php';
$dao = MySQLDB::getInstance($config);//$dao , Database Access Object 数据库操作对象（dao层）

//获得比赛列表数据
$sql = "select t1.t_name as t1_name, m.t1_score, m.t2_score, t2.t_name as t2_name, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id  left join `team` as t2 ON m.t2_id=t2.t_id;";
$match_list = $dao->getAll($sql);