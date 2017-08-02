<?php

//增，改
// setCookie('class_name', 'PHP34');
//删
// setCookie('class_name', '');
// setCookie('class_name');


// setCookie('long_class_name', 'long_PHP34', time()+60);

// setCookie('class_name', '');

// setCookie('path_name', 'path_PHP34');

// require './kang/cookie_kang_1.php';

// setCookie('domain_name', 'in_test_kang', 0, '', 'kang.com');

// setCookie('not_secure', 'php34', 0, '', '', false);//不开启仅安全连接传输
// setCookie('do_secure', 'php34', 0, '', '', true);//开启仅安全连接传输
// setCookie('do_httponly', 'php34', 0, '', '', false, true);//开启HTTPONLY
// setCookie('not_httponly', 'php34', 0, '', '', false, false);//关闭HTTPONLY


// setCookie('student[name]', 'Kang');
// setCookie('student[gender]', 'Male');
echo 'Before';

setCookie('where', 'PHP34');

var_dump($_COOKIE['where']);