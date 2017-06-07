<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
$s1 = "php34.com";

//单引号字符串： 
//可以识别（需要使用）的转义符有： \\	\'
//转义符：就是用来表达 一直特殊符号的字符形式
$str1 = 'ab\nc"d\'efg:$s1';
echo "<p>$str1</p>";

//双引号字符串： 
//可以识别（需要使用）的转义符有： \\	\"	\n	\r	\t	\$
//双引号字符串中，可以自动识别变量（以$开头的连续字符）
$str2 = "abc'd\",\101,\x41,efg:$s1";	//自动识别变量$s1
echo "<p>$str2</p>";


//nowdoc（单引号）定界符字符串：
//说明： ABCD是一个自定义的标识符，放在单引号中
//此字符串形式没有可用的转义符
$str3 = <<<'ABCD'
这里就是字符串的内容，几乎可以写任何东西
写啥就是啥，包括回车，tab符，$符，等等
包括单双引号都可以直接写出
通常这里可以方便写大段的html，js代码，并输出
ABCD;
//该字符串的结束标识符必须跟前面完全一样
//且该结束符所在行只能出现该标识符和一个分号
echo "<p>$str3</p>";

//heredoc（双引号）定界符字符串：
//说明： ABCD是一个自定义的标识符，放在双引号中（或不用引号）
//在此形式中，其转义符跟双引号字符串几乎差不多（双引号不转义）
//也能识别变量
$str4 = <<<"ABCDE"
这里就是字符串的内容，几乎可以写任何东西
写啥就是啥，包括回车，tab符，\$符，等等
包括单双引号都可以直接写出，双引号:", \"
通常这里可以方便写大段的html，js代码，并输出
ABCDE;
//该字符串的结束标识符必须跟前面完全一样
//且该结束符所在行只能出现该标识符和一个分号
echo "<p>$str4</p>";


?>
</body>
</html>
