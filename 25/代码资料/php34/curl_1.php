<?php


# GET
// $curl = curl_init();
// $url = 'http://shop.kang.com/index.php?p=back&c=Admin&a=login';
// curl_setopt($curl, CURLOPT_URL, $url);

// curl_exec($curl);//

// curl_close($curl);


# POST
// $curl = curl_init();

// $url = 'http://shop.kang.com/index.php?p=back&c=Admin&a=check';
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);//
// $post_data = array('username'=>'admin', 'password'=>'1234abcd', 'captcha'=>'HHHH');
// curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

// curl_exec($curl);
// curl_close($curl);



# 返回响应数据
// $curl = curl_init();

// $url = 'http://shop.kang.com/index.php?p=back&c=Admin&a=check';
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);//
// $post_data = array('username'=>'adafdin', 'password'=>'1234abcd', 'captcha'=>'HHHH');
// curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//

// $response_content = curl_exec($curl);
// echo iconv('utf-8', 'gbk', $response_content);
// curl_close($curl);


# POST file upload
// $curl = curl_init();

// $url = 'http://shop.kang.com/upload.php';
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);
// $post_data = array('logo'=>'@e:/amp/apache/htdocs/php34/upload_to.png');
// curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

// curl_exec($curl);
// curl_close($curl);

# POST 验证管理员信息，获取登录标志
// $curl = curl_init();

// $url = 'http://shop.kang.com/index.php?p=back&c=Admin&a=check';
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);
// $post_data = array('username'=>'admin', 'password'=>'1234abcd', 'captcha'=>'HHHH');
// curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
// curl_setopt($curl, CURLOPT_HEADER, true);
// curl_setopt($curl, CURLOPT_COOKIEJAR, 'e:/amp/apache/htdocs/php34/cookie.txt');

// curl_exec($curl);
// curl_close($curl);

# shop后台首页
$curl = curl_init();

$url = 'http://shop.kang.com/index.php?p=back&c=Manage&a=index';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_COOKIEFILE, 'e:/amp/apache/htdocs/php34/cookie.txt');

curl_exec($curl);
curl_close($curl);
