<?php
// tip 有效期的设定是个时间间隔
header('Content-Type: text/html; charset=utf-8');
session_set_cookie_params(600, '/', 'kang.com');

// var_dump($_SESSION);
session_start();
echo  '<PRE>';


session_destroy();
var_dump($_SESSION);