<?php


/**
 * 验证码 工具
 */
class Captcha {

	/**
	 * 输出生成的验证码输出
	 *
	 * @param $code_len=4 码值的长度
	 * @return void
	 */
	public function generate($code_len=4) {
		//生成码值
		$chars = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';//所有可能字符
		$chars_len = strlen($chars);
		$code = '';//初始化码值字符串
		for($i=1; $i<=$code_len;++$i) {
			$rand_index = mt_rand(0, $chars_len-1);
			$code .= $chars[$rand_index];//字符串支持[]操作，通过下标取得某个字符
		}
		//echo $code;

		//存储于session，用于验证
		@session_start();//保证session机制一定是开启的，同时重复开启不会报错，@屏蔽错误。
		$_SESSION['captcha_code'] = $code;

		//生成验证码图片

		//背景图
		$bg_file = TOOL_PATH . 'captcha/captcha_bg' . mt_rand(1, 5) . '.jpg';

		//基于jpg格式的图片创建画布
		$img = imageCreateFromJPEG($bg_file);

		//随机分配字符串颜色
		$str_color = mt_rand(1, 3) == 1 ? imageColorAllocate($img, 0, 0, 0) : imageColorAllocate($img, 0xff, 0xff, 0xff);

		//字符串
		$font = 5;
		// 画布尺寸
		$img_w = imageSX($img);
		$img_h = imageSY($img);
		// 字体的尺寸
		$font_w = imageFontWidth($font);
		$font_h = imageFontHeight($font);
		// 字符串的尺寸
		$code_w = $font_w * $code_len;
		$code_h = $font_h;
		$x = ($img_w-$code_w)/2;
		$y = ($img_h-$code_h)/2;
		imageString($img, $font, $x, $y, $code, $str_color);

		//输出
		header('Content-Type: image/jpeg;');
		imageJPEG($img);

		//
		imageDestroy($img);
	}

	/**
	 * 验证
	 * @param $request_code 用户表单中提交的码值
	 * @return bool 是否匹配
	 */
	public function checkCaptcha($request_code) {
		@session_start();
		//严格点，存在且相等(不区分大小写）。
		//strCaseCmp()不区分大小写字符串比较，返回值负，第一个小，返回正，第一个大，返回0，相等。strCmp也是类似，不过是区分大小写比较。
		$result = isset($request_code) && isset($_SESSION['captcha_code']) && (strCaseCmp($request_code, $_SESSION['captcha_code'])==0);

		//安全考虑，销毁session中的验证码值
		unset($_SESSION['captcha_code']);

		return $result;

	}
}