1.查出“计算机系”的所有学生信息。 

select * from stu where 院系ID = (
select 院系ID from yx where 院系名称 = '计算机系'
);          

select stu.* from stu join yx on stu.院系ID = yx.院系ID where 院系名称 = '计算机系'






2.查出“韩顺平”所在的院系信息。
select *from yx where 院系ID = (
select 院系ID from stu where 学生 = '韩顺平'
);
select yx.* from stu join yx on stu.院系ID = yx.院系ID where 学生 = '韩顺平'



3.查出在“行政楼”办公的院系名称。
select 院系名称 from yx where 系办地址 like '%行政楼%';




4.查出男生女生各多少人。
select 性别, count(*) as 人数  from stu where 1 group by 性别




5.查出人数最多的院系信息。
select * from yx where 院系ID = (
select 院系ID from stu group by 院系ID order by count(*) desc limit 1
);


//当人数最多的院校并列时
select * from yx where 院系ID = (
      select 院系ID from stu group by 院系ID having count(*) = (
            select max(数量) from (select count(*) as 数量 from stu group by 院系ID) as t1
      )
);









6. 查出人数最多的院系的男女生各多少人。

select 性别, count(*) as 人数 from stu where 院系ID = (
	select 院系ID from stu group by 院系ID having count(*) = (
		select max(数量) from (
				select count(*) as 数量 from stu group by 院系ID
			) as t1
		)
)  group by 性别 ;


7.查出跟“罗弟华”同籍贯的所有人。


select *from stu where 籍贯 in (
	select 籍贯 from stu where 学生 = '罗弟华'
) and 学生 != '罗弟华'




8. 查出有“河北”人就读的院系信息。
select * from yx where 院系ID in(
	select 院系ID from stu where 籍贯 = '河北'
);




9. 查出跟“河北女生”同院系的所有学生的信息。
// 河北女生院系
select 院系ID from stu where 籍贯 = '河北' and 性别 = '女';

//排除河北女生ID
select 学生ID from stu where 籍贯 = '河北' and 性别 = '女'

select * from stu where 院系ID in (
       select 院系ID from stu where 籍贯 = '河北' and 性别 = '女'
) and 学生ID not in (select 学生ID from stu where 籍贯 = '河北' and 性别 = '女');

























1)查询选修了 MySQL 的学生姓名；
2)查询 张三 同学选修了的课程名字；
3)查询只选修了1门课程的学生学号和姓名；
4)查询选修了至少3门课程的学生信息；
5)查询选修了所有课程的学生；
6)查询选修课程的学生人数；
7)查询所学课程至少有一门跟 张三 所学课程相同的学生信息。
8)查询两门及两门以上不及格同学的平均分






















