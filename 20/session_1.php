<?php

//

ini_set('session.save_path', './11/');

session_start();

$_SESSION['class_name'] = 'PHP34';
$_SESSION['teacher_name'] = 'Kang';
$_SESSION['teacher_n3'] = 'Kang';
$_SESSION['teachfsa'] = 'Kang';
$_SESSION['sfa'] = 'Kang';
return;

unset($_SESSION['teacher_name']);

$_SESSION['class_name'] = 'ITCAST-PHP34';

var_dump($_SESSION['class_name']);
