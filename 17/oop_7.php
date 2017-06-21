<?php


interface I_Goods {
	public function setName($name);
	public function setPrice($name);
	public function getPrice();
}
abstract class Goods implements I_Goods {
}