<?php



//学生起来

$s_data = file_get_contents('./student_sleep.txt');
// var_dump($s_data);
require './Student.class.php';
$s = unserialize($s_data);
var_dump($s);