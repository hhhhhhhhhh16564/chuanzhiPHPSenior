<?php

class H {

	// public function HgetP () {
		//echo $this->p;
	// 	echo self::$sp;
	// }

	public static function HgetP () {
		// echo $this->p;
		echo self::$sp;
	}

}

class Z extends H {
	protected $p = 'value';
	public static $sp = 'static-value';
	// public function ZgetP () {
	// 	echo self::$sp;
	// } 
	public static function ZgetP () {
		// echo $this->p;
		echo self::$sp;
	}
}

class K extends Z {
	// public function KgetP () {
	// 	echo self::$sp;
	// }
	public static function KgetP () {
		// echo $this->p;
		echo self::$sp;
	}
}
// echo H::HgetP();
echo Z::ZgetP();
echo K::KgetP();
// $o = new K;
// $o->HgetP();
// var_dump($o);
// $o->ZgetP();
