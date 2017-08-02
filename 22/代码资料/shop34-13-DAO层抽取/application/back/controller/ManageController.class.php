<?php

/**
 * 后台管理平台首页
 */
class ManageController extends Controller {

	/**
	 * 首页动作
	 */
	public function indexAction() {
		//验证是否具有登录标志
		new SessionDB();
		if (!isset($_SESSION['is_login'])) {
			//没有
			$this->_jump('index.php?p=back&c=Admin&a=login');
		}

		//功能
		echo '你好，这里是后台首页';
	}
}