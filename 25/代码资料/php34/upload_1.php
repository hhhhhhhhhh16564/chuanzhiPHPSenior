<?php
header("Content-Type: text/html; charset=utf-8");

/**
 * 上传
 * @param $tmp_file array 关联数组，5个元素。临时上传文件的信息
 * @return 成功：srting上传到服务器的文件名；失败:false；
 */
function upload($tmp_file) {
	# 是否存在错误
	if($tmp_file['error'] != 0) {
		echo '文件上传错误,<Br>';
		echo $tmp_file['error'], '<br>';
		return false;
	}

	# 尺寸
	$max_size = 1024*1024;//最大尺寸 1M
	if ($tmp_file['size'] > $max_size) {
		echo '文件过大';
		return false;
	}

	# 类型
	# 保证修改允许的后缀名，就可以影响到$allow_ext_list和$allow_mime_list
	# 设置一个后缀名与mime的映射关系
	$type_map = array(
		'.png' 	=> array('image/png', 'image/x-png'),
		'.jpg'	=> array('image/jpeg', 'image/pjpeg'),
		'.jpeg'	=> array('image/jpeg', 'image/pjpeg'),
		'.gif'	=> array('image/gif'),
		);
	# 后缀，从原始文件名中提取
	$allow_ext_list = array('.png', '.jpg');
	$ext = strtolower(strrchr($tmp_file['name'], '.'));
	if (!in_array($ext, $allow_ext_list)) {
		echo '类型不合法';
		return false;
	}
	# MIME, type元素。
	// $allow_mime_list = array('image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png');
	$allow_mime_list = array();
	foreach($allow_ext_list as $value) {
		//得到每个后缀名
		$allow_mime_list = array_merge($allow_mime_list, $type_map[$value]);
	}
	// 去重
	$allow_mime_list = array_unique($allow_mime_list);
	if (!in_array($tmp_file['type'], $allow_mime_list)) {
		echo '类型不合法';
		return false;
	}
	//PHP自己获取文件的mime，进行检测
	$finfo = new Finfo(FILEINFO_MIME_TYPE);//获得一个可以检测文件MIME类型信息的对象
	$mime_type = $finfo->file($tmp_file['tmp_name']);//检测
	if (!in_array($mime_type, $allow_mime_list)) {
		echo '类型不合法';
		return false;
	}


	# 移动
	# 上传文件存储地址
	$upload_path = './';
	//创建子目录
	$subdir = date('YmdH') . '/';
	if(!is_dir($upload_path . $subdir)) {//检测是否存在
		//不存在
		mkdir($upload_path . $subdir);
	}
	# 科学起名
	$prefix = 'kang_';
	$upload_filename = uniqID($prefix, true) . $ext;
	if (move_uploaded_file($tmp_file['tmp_name'], $upload_path . $subdir . $upload_filename)) {
		// 移动成功，返回文件名
		return $subdir . $upload_filename;
	} else {
		// 移动失败
		echo '移动失败';
		return false;
	}

}


function uploadList($tmp_file_list) {
	//遍历
	foreach($tmp_file_list['error'] as $key=>$v) {
		$tmp_file = array();
		//利用key获取所有的5个属性
		$tmp_file['name'] = $tmp_file_list['name'][$key];
		$tmp_file['type'] = $tmp_file_list['type'][$key];
		$tmp_file['tmp_name'] = $tmp_file_list['tmp_name'][$key];
		$tmp_file['error'] = $tmp_file_list['error'][$key];
		$tmp_file['size'] = $tmp_file_list['size'][$key];
		//上传即可
		upload($tmp_file);
	}

}

uploadList($_FILES['pic']);

// $result = upload($_FILES['logo']);
// var_dump($result);

echo '<pre>';
// var_dump($_POST);

var_dump($_FILES);
// sleep(10);

// move_uploaded_file($_FILES['logo']['tmp_name'], './upload.jpg');