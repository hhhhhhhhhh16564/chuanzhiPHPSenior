<?php

function kangAutoload($class_name) {
	echo 'kangAutoload<br>';
	// 先判断当前所需要加载的类，是否为当前模块的
	$class_list = array('H', 'Z', 'K');
	if (in_array($class_name, $class_list)) {
		require './kang/' . $class_name . '.class.php';
	}
}
spl_autoload_register('kangAutoload');