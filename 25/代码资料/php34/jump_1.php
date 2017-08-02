<?php
header('Content-Type: text/html; charset=utf-8');
// echo 'before header function';

// header('Location: jump_2.php');
// die;

// file_put_contents('./after_header.txt', 'after header function');



// 提示后
header('Refresh: 3; URL=jump_2.php');
// 提示内容
echo '管理员非法';
ddie;

// 额外的业务逻辑