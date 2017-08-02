<?php

class Student {
	private $_name;
	private $_gender;

	private $_energy = 100;
	public function __construct($name, $gender) {
		$this->_name = $name;
		$this->_gender = $gender;
	}

	public function decrement($n) {
		$this->_energy -= $n;
	} 

	public function __sleep() {
		return array('_name', '_gender');//需要被序列化的属性名列表即可
	}

	public function __wakeup() {
		$this->decrement(3);
	}
}

