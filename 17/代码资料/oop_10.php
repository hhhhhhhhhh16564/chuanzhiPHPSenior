<?php

require './Student.class.php';

$s = new Student('杨过', 'male');

//工作后，能量减少
$s->decrement(10);
$s->decrement(30);
$s->decrement(20);

//学生休息
// 保持当前学生状态，存取起来（数据库，文件）永久性存储
$s_data = serialize($s);
$result = file_put_contents('./student_sleep.txt', $s_data);
var_dump($result);