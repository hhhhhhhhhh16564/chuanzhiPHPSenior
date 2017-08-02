<?php
# 比赛列表
header('Content-Type: text/html; charset=utf-8');

// 实例化相应的模型类对象，调用某个方法，实现固定功能
// require './MatchModel.class.php';
// $m_match = new MatchModel();
//通过工厂获得对象
require './Factory.class.php';
$m_match = Factory::M('MatchModel');
$match_list = $m_match->getList();
// $m_match2 = Factory::M('MatchModel');

// 载入负责显示的html文件
require './template/match_list_v.html';