<?php

// 确定分发参数
// 平台
$default_platform = 'test';
define('PLATFORM', isset($_GET['p']) ? $_GET['p'] : $default_platform);
// 控制器类
$default_controller = 'Match';
define('CONTROLLER', isset($_GET['c']) ? $_GET['c'] : $default_controller);
// 动作
$default_action = 'list';
define('ACTION', isset($_GET['a']) ? $_GET['a'] : $default_action);

//实例化控制器类,并调用动作方法
$controller_name = CONTROLLER . 'Controller';
require './application/' . PLATFORM . '/controller/' . $controller_name . '.class.php';
//实例化
$controller = new $controller_name();//可变类
//调用方法（action动作）
//拼凑当前的方法动作名字符串
$action_name = ACTION . 'Action';
$controller->$action_name();//可变方法