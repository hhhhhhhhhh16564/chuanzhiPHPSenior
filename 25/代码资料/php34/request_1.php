<?php

//http://www.sina.com.cn/

$host = 'www.sina.com.cn';//host使用IP也可以
$port = '80';

$link = fsockopen($host, $port);
// var_dump($link);
define('CRLF', "\r\n");
// 请求行
$request_data = 'GET / HTTP/1.1' . CRLF;
// 请求头
$request_data .= 'Host: www.sina.com.cn' . CRLF;
$request_data .= 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0' . CRLF;
$request_data .= 'Connection: close' . CRLF;
// 空行表示头结束
$request_data .= CRLF;
// 请求主体，GET没有主体

// 发送
fwrite($link, $request_data);

// 处理响应数据
while(!feof($link)) {
	// echo iconv('utf-8', 'gbk', fgets($link, 1024));
	echo fgetS($link, 1024);
}

fclose($link);
