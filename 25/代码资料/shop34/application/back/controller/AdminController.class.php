<?php

/**
 * 后台管理员相关操作(登录，退出，找回密码，管理员增删改查，权限控制）控制器类
 */
class AdminController extends PlatformController {
	/**
	 * 登录表单动作
	 */
	public function loginAction() {
		//载入当前的视图层模板
		require CURRENT_VIEW_PATH . 'login.html';
	}
	/**
	 * 生成管理员登录页面的验证码动作，被img标签的src属性请求
	 */
	public function captchaAction() {
		//利用Captcha工具类
		$t_captcha = new Captcha();
		//生成
		$t_captcha->generate();
	}

	/**
	 * 验证管理员是否合法
	 */
	public function checkAction() {
		// 验证验证码
		// $t_captcha = new Captcha();
		// if (!$t_captcha->checkCaptcha($_POST['captcha'])) {
		// 	//验证码错误
		// 	$this->_jump('index.php?p=back&c=Admin&a=login', '验证码错误', 30);
		// }

		// 获得表单数据
		$admin_name = $_POST['username'];
		$admin_pass = $_POST['password'];

		//从数据库中验证管理员信息是否存在合法
		$m_admin = Factory::M('AdminModel');
		if ($admin_info = $m_admin->check($admin_name, $admin_pass)) {
			//验证通过，合法
			//设置登录标志,session
			$_SESSION['admin'] = $admin_info;//登录标志，管理员信息
			//跳转
			$this->_jump('index.php?p=back&c=Manage&a=index');
		} else {
			// 非法
			$this->_jump('index.php?p=back&c=Admin&a=login', '管理员信息非法' ,30);
		}
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->_jump('index.php?p=back&c=Admin&a=login');
	}
}