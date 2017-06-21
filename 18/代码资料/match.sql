-- 比赛
create table `match` (
m_id int unsigned primary key auto_increment,
t1_id int unsigned comment '球队一ID',
t2_id int unsigned comment '球队二ID',
t1_score int comment '球队一进球',
t2_score int comment '球队二进球',
m_time int comment '比赛时间 时间戳'
)charset=utf8;
insert into `match` values 
(null, 3, 4, 1, 2, unix_timestamp('2015-01-31 17:00:00')),
(null, 1, 2, 2, 3, unix_timestamp('2015-01-30 17:00:00')),
(null, 4, 2, 2, 0, unix_timestamp('2015-01-27 17:00:00')),
(null, 3, 1, 2, 0, unix_timestamp('2015-01-26 17:00:00')),
(null, 5, 4, 0, 2, unix_timestamp('2015-01-22 18:30:00')),
(null, 8, 5, 0, 1, unix_timestamp('2015-01-10 17:00:00')),
(null, 5, 7, 2, 1, unix_timestamp('2015-01-14 17:00:00')),
(null, 5, 6, 2, 1, unix_timestamp('2015-01-18 17:00:00'));

-- 球队
create table `team` (
t_id int unsigned primary key auto_increment,
t_name varchar(20)
)charset=utf8;
insert into `team` values 
(1, '伊拉克'), (2, '阿联酋'), (3, '韩国'), (4, '澳大利亚'), (5, '中国'), (6, '朝鲜'), (7, '乌兹别克斯坦'), (8, '沙特');

-- 运动员
create table `player` (
p_id int unsigned primary key auto_increment,
p_name varchar(20),
t_id int unsigned comment '球队ID'
)charset=utf8;
insert into `player` values 
(null, '张琳芃', 5),(null, '郜林', 5),(null, '孙可', 5),(null, '王大雷', 5),(null, '吴曦', 5) ,(null, '于海', 5);


select * from `match` ;

select t1.t_name, m.t1_score, m.t2_score, m.t2_id, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id;

select t1.t_name, m.t1_score, m.t2_score, t2.t_name, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id  left join `team` as t2 ON m.t2_id=t2.t_id;


select t1.t_name as t1_name, m.t1_score, m.t2_score, t2.t_name as t2_name, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id  left join `team` as t2 ON m.t2_id=t2.t_id;