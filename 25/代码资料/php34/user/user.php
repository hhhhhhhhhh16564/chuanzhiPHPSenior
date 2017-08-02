<?php

function userAutoload($class_name) {
	echo 'userAutoload<br>';
	require './user/' . $class_name . '.class.php';
}
spl_autoload_register('userAutoload');