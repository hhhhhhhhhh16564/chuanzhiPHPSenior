<?php
header('Content-type: text/html; charset=utf-8');
class School {
	private $_studnet_count;
}
class Student {

	//学生计数器，每个学生对象表示一个学生，记录下来共多少个学生
	private static $_student_count = 0;

	private $_name;

	public function __construct($name) {
		$this->_name = $name;
		//累加计数器
		++ static::$_student_count;
	}

	public function __clone() {
		++ static::$_student_count;
	}

	public function __destruct() {
		-- static::$_student_count;
	}

	public static function getStudentCount() {
		return static::$_student_count;
	}
}

$s1 = new Student('杨过');
echo '当前已经存在：' ;
echo Student::getStudentCount();
echo '名学生<br>';
$s2 = new Student('龙姑娘');
echo '当前已经存在：' ;
echo Student::getStudentCount();
echo '名学生<br>';
$s3 = new Student('李莫愁');
echo '当前已经存在：' ;
echo Student::getStudentCount();
echo '名学生<br>';





unset($s3);
echo '当前已经存在：' ;
echo Student::getStudentCount();
echo '名学生<br>';