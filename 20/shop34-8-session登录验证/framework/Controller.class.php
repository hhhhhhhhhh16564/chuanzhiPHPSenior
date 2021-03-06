<?php

/**
 * 基础控制器
 */
class Controller {

	/**
	 * 构造方法
	 */
	public function __construct() {
		$this->_initContentType();
	}

	/**
	 * 初始化Content-Type
	 */
	protected function _initContentType() {
		header('Content-Type: text/html; charset=utf-8');
	}

	/**
	 * 跳转
	 * @param $url 目标URL
	 * @param $info 提示信息
	 * @param $wait 等待时间（单位秒）
	 * @return void
	 */
	protected function _jump($url, $info=NULL, $wait=3) {
		//判断立即还是提示
		if (is_null($info)) {
			//立即，header('Location:')
			header('Location: ' . $url);
		} else {
			//提示后， Refresh: N; URL=$url
			header("Refresh: $wait; URL=$url");
			echo $info;
		}
		//终止脚本
		die;
	}
}