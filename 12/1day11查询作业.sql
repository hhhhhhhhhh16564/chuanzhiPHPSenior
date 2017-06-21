第一大题：
1)查出“计算机系”的所有学生信息。 
方法1：
select * from 学生表  where 院系ID = (select 院系ID from 院系 where 院系名称='计算机系');
方法2：
select 学生表.* from 学生表 inner join 院系 on 院系.院系ID=学生表.院系ID where 院系名称='计算机系';
通常：可以使用连接查询和子查询都能达到目的的时候，推荐使用连接查询。

2)查出“韩顺平”所在的院系信息。
方法1：
select 院系.* from 学生表 inner join 院系 on 院系.院系ID=学生表.院系ID where 学生='韩顺平';
方法2：
select * from 院系 where 院系ID = (select 院系ID from 学生表 where 学生='韩顺平');

3)查出在“行政楼”办公的院系名称。
select 院系名称 from 院系 where  系办地址  like '%行政楼%';

4)查出男生女生各多少人。
select 性别, count(*) as 数量 from 学生表 group by 性别;

5)查出人数最多的院系信息。
第一步：按院系统计人数,并根据人数取得最大人数，再取得对应院系ID：
select 院系ID  from 学生表 group by 院系ID order by count(*) desc limit 0,1;
第二步：
select * from 院系 where 院系ID = (
	select 院系ID  from 学生表 group by 院系ID order by count(*) desc limit 0,1
);
如果考虑人数最多的院系有可能2个最多的时候还相等：
先找出最大的数量：
	select max(数量) from (select count(*) as 数量  from 学生表 group by 院系ID ) as t1
再用之当作“判断数”找出院系ID：
	select 院系ID,count(*) as 数量  from 学生表 group by 院系ID having 数量=4;//这里假设数量就是4
将上述2个嵌套为子查询：
	select 院系ID  from 学生表 group by 院系ID having count(*)=(
		select max(数量) from (select count(*) as 数量  from 学生表 group by 院系ID ) as t1
	);
再用此作为查找院系信息的数据：
	select * from 院系 where 院系ID in (
		select 院系ID  from 学生表 group by 院系ID having count(*)=(
			select max(数量) from (select count(*) as 数量  from 学生表 group by 院系ID ) as t1
		)
	);
徐刚的做法
select * from 院系表 where 院系ID in ( 
	select 院系ID from 学生表 group by 院系ID having count(院系ID) >= all(
		select count(院系ID) from 学生表 group by 院系ID
		)
	);
6)查出人数最多的院系的男女生各多少人。
根据第5题的第一步，找到人数最多的院系ID，并以此为条件找出该院系的所有人并进行分组统计：
select 性别, count(*) as 人数 from 学生表 where 院系ID=1 group by 性别;
上一行是假设已知人数最多的院系ID为1，现在再套入该数据的“来源”（子查询结果）：
select 性别, count(*) as 人数 from 学生表 where 院系ID= (
	select 院系ID  from 学生表 group by 院系ID order by count(*) desc limit 0,1
	) group by 性别;


7)查出跟“罗弟华”同籍贯的所有人。
第一步：找出该人的籍贯（考虑重名）：
select 籍贯 from 学生表 where 学生 = '罗弟华';
第二步，以此为条件，找学生信息：
select * from 学生表 where 籍贯 in(
	select 籍贯 from 学生表 where 学生 = '罗弟华'
);

8)查出有“河北”人就读的院系信息。
select * from 院系 where 院系ID in(
	select 院系ID from 学生表 where 籍贯='河北'
);

9)查出跟“河北女生”同院系的所有学生的信息。
第一步：找出所有河北女生的所属院系（可能多个）：
select 院系ID from 学生表 where 性别='女' and 籍贯='河北';
第二步：以此为条件，找出学生信息：
select * from 学生表 where 院系ID in(
	select 院系ID from 学生表 where 性别='女' and 籍贯='河北'
)
第3步（补充）：假设考虑排除这些河北女生（只列出其他）：
select * from 学生表 where 院系ID in(
	select 院系ID from 学生表 where 性别='女' and 籍贯='河北'
)
and 学生ID not in(
	select 学生ID from 学生表 where 性别='女' and 籍贯='河北'
)



第二大题：
1)查询选修了 MySQL 的学生姓名；
方法1：
select name from stu where id in(
	select stu_id from stu_kecheng where kecheng_id=(
		select id from kecheng where kecheng_name = 'Mysql'
	)
);
方法2：
select stu.name from stu 
	inner join stu_kecheng as sk on sk.stu_id=stu.id
	inner join kecheng as kc on kc.id = sk.kecheng_id
	where kc.kecheng_name = 'Mysql';

2)查询 张三 同学选修了的课程名字；
方法1：
select kc.kecheng_name from stu 
	inner join stu_kecheng as sk on sk.stu_id=stu.id
	inner join kecheng as kc on kc.id = sk.kecheng_id
	where stu.name = '张三';
方法2：
select kc.kecheng_name from kecheng as kc where id in(
	select kecheng_id from stu_kecheng where stu_id = (
		select id from stu where name='张三'
	)
);

3)查询只选修了1门课程的学生学号和姓名；
select id, name from stu where id in(
	select stu_id from stu_kecheng 
		group by stu_id having count(*) = 1
);

4)查询选修了至少3门课程的学生信息；
select * from stu where id in(
	select stu_id from stu_kecheng 
		group by stu_id having count(*) >= 3
);

5)查询选修了所有课程的学生；
select * from stu where id in(
	select stu_id from stu_kecheng 
		group by stu_id having count(*) = (
			select count(*) as c from kecheng
		)
);//实际结果中，没有该数据

6)查询选修课程的学生人数；
select count(*) from (
	select count(*) from stu_kecheng group by stu_id
	) as  t1;
7)查询所学课程至少有一门跟 张三 所学课程相同的学生信息。
select * from stu where id in( /*某些学生id，其选修了某些课程*/
	select stu_id from stu_kecheng where kecheng_id in(张三的课程id)
);
再往下：
select * from stu where id in( /*某些学生id，其选修了某些课程*/
	select stu_id from stu_kecheng where kecheng_id in(/*张三的课程id*/
		select kecheng_id from stu_kecheng where stu_id=张三的ID 
	)
);
再往下2：
select * from stu where id in( /*某些学生id，其选修了某些课程*/
	select stu_id from stu_kecheng where kecheng_id in(/*张三的课程id*/
		select kecheng_id from stu_kecheng where stu_id=(/*张三的ID*/
			select id from stu where name = '张三'
		)
	)
);


8)查询两门及两门以上不及格同学的平均分：
select avg(score) from stu_kecheng where stu_id in(/*找2门及以上不及格同学的id*/
	select stu_id from stu_kecheng where score < 60 group by stu_id having count(*)>=1
)
group by stu_id;
说明：这里改造为１门（因为数据量少）
































