<?php

header('Content-Type: text/html; charset=utf-8');

class Student {
	
	public static function getStudentCount() {
		var_dump($this);
		return 42;
	}

	public function getName() {
		var_dump($this);
		return '神雕侠侣';
	}
}

echo Student::getStudentCount();
echo '<br>';
echo Student::getName();
echo '<br>';
echo '<hr>';
$s = new Student;
echo $s->getName();
echo '<br>';
echo $s->getStudentCount();
echo '<br>';