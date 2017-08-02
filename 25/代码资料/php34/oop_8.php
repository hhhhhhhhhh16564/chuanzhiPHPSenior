<?php


interface I_Goods {

}

abstract class Goods implements I_Goods {
}

// final class Book extends Goods {
// }
function userAutoload($class_name) {
	echo 'userAutoload<br>';
	// var_dump($class_name);
	// require $class_file;
}
spl_autoload_register('userAutoload');
function kangAutoload($class_name) {
	echo 'kangAutoload<br>';
	// var_dump($class_name);
	// require $class_file;
}
spl_autoload_register('kangAutoload');




// $o = new Book;
// var_dump($o);


