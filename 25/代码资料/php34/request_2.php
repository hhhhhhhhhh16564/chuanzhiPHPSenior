<?php



$host = 'shop.kang.com';//host使用IP也可以
$port = '80';

$link = fsockopen($host, $port);
// var_dump($link);
define('CRLF', "\r\n");
// 请求行
$request_data = 'POST /index.php?p=back&c=Admin&a=check HTTP/1.1' . CRLF;
// 请求头
$request_data .= 'Host: shop.kang.com' . CRLF;
$request_data .= 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0' . CRLF;
$request_data .= 'Connection: close' . CRLF;
//post请求特殊的头，描述请求主体
$post_data = array('username'=>'hehhe', 'password'=>'1234abcd', 'captcha'=>'HHHH');
//username=admin&password=1234abcd&captcha=HHHH
$post_content = http_build_query($post_data);
$request_data .= 'Content-Length: ' . strlen($post_content) . CRLF;
$request_data .= 'Content-Type: application/x-www-form-urlencoded' . CRLF;
// 空行表示头结束
$request_data .= CRLF;
// 请求主体
$request_data .= $post_content;//主体结束不需要CRLF

// 发送
fwrite($link, $request_data);

// 处理响应数据
while(!feof($link)) {
	echo iconv('utf-8', 'gbk', fgets($link, 1024));
}

fclose($link);
