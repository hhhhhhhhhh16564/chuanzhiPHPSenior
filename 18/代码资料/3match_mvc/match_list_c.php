<?php
# 比赛列表
header('Content-Type: text/html; charset=utf-8');

// 调用相应的m，获取比赛列表数据
require './match_list_m.php';

// 载入负责显示的html文件
require './template/match_list_v.html';