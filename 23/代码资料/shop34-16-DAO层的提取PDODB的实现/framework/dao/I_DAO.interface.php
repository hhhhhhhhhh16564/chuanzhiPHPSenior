<?php
/**
 * DAO层操作接口
 */

interface I_DAO {
	public static function getInstance($config);
	public function query($sql);
	public function getAll($sql);
	public function getRow($sql);
	public function getOne($sql);
	public function escapeString($data);
}