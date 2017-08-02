<?php

//配置
// ini_set('session.gc_probability', '1');
// ini_set('session.gc_divisor', '3');

// require './userSession.php';

ini_set('session.use_only_cookies', '0');
ini_set('session.use_trans_sid', '1');
session_start();
$_SESSION['class_name'] = 'PHP34';
$_SESSION['teacher_name'] = 'KANG';

?>
<a href="session_4.php">session4</a>