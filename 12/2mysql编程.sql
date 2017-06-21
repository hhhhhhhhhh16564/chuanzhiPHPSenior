//创建函数：
create function getPingfanghe(x float, y float)
returns float
begin
	#此函数体范围内，就是所谓的“编程环境”

	set @result = x*x + y*y; #“定义”会话变量并赋值
	return @result;
end;

create function getPingfanghe2(x float, y float)
returns float
begin
	#此函数体范围内，就是所谓的“编程环境”
	#此范围就可以使用普通变量，已经各种流程控制结构
	declare result float default 0;	#定义普通变量并设定初值
	set result = x*x + y*y;
	return result;
end;

//创建过程：
//此存储过程意图用于传入两个数据并将该两个数据插入表enum_test中。
create procedure  pro1 (n int, xuanxiang varchar(20) )
begin
	insert into enum_test (id, xuanxiang)values(n, xuanxiang);
end;

//再来写一个具有out作用的存储过程：
create procedure getXiebian( z1 float, z2 float, out xiebian float)
begin
	set @pingfanghe = getPingfanghe(z1, z2);#调用函数去计算平方和
	set xiebian = pow(@pingfanghe, 0.5);
end;
//该存储过程调用的时候，第3个参数必须是一个变量

//写一个存储过程中使用select：
create procedure  gettables()
begin
	select * from enum_test;
	select * from set_test;
	select * from tab5;
end; 

//定义一个触发器，让该触发器可以在tab5插入数据的时候，
//自动将其实不部分数据插入另一个表中以供“外方合作单位”使用。
//tab5的字段为：id, f1, f2, f4, id2;
//要插入的另一个表的字段为：id, f1, f2
create trigger getSubData  after insert on tab5 for  each  row 
begin
	#set @id = new.id;	#new在触发器中是特定关键字，
						#代表“刚刚插入的数据行”，这里代表其中的该行数据的id值
	#set @v1 = new.f1;	#新插入数据的f1字段的值
	#set @v2 = new.f2;	#新插入数据的f1字段的值
	insert into tab5_sub (f1, f2)values(new.f1,new.f2);
end;



