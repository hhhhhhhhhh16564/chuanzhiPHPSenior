<?php


class Student {
	private $_name = '杨过';
	private $_nickname = '神雕大侠';
	private $_height = 180;

	public function __toString() {
		//将对象的标志性属性，展示出来即可
		return '[' . $this->_nickname . ']' .  $this->_name;
	}
}

$o = new Student;

echo $o;//echo 输出字符串。
//需要得到字符串类型，给出的对象，需要将对象转换成字符串类型，自动类型转换
echo '<br>';
var_dump((string) $o);//强制将对象转换成字符串类型