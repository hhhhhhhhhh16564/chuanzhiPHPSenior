<?php

//
session_start();

$_SESSION['class_name'] = 'PHP34';
$_SESSION['teacher_name'] = 'Kang';

unset($_SESSION['teacher_name']);

$_SESSION['class_name'] = 'ITCAST-PHP34';

var_dump($_SESSION['class_name']);
