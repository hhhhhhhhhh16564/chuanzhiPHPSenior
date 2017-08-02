<?php
// echo 'before session start';
//
session_set_cookie_params(600, '/', 'kang.com');
require './userSession.php';
session_start();

$_SESSION['class_name'] = 'PHP34';
$_SESSION['teacher_name'] = 'Kang';

unset($_SESSION['teacher_name']);

$_SESSION['class_name'] = 'ITCAST-PHP34';

var_dump($_SESSION['class_name']);

$_SESSION['student_list'] = array(
	array('name'=>'Kang', 'gender'=>'male', 'hobby'=>array('足球', '篮球', '羽毛球')),
	array('name'=>'杨过', 'gender'=>'male', 'hobby'=>array('骑马', '打仗', '吃小笼包')),
	);

// $_SESSION[42] = 'long live the king!';