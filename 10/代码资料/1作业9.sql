/*
///////////////////////////////////////////////////////////////////////////
1，建一个innodb类型且字符集为utf8的表，其中包括以下类型的字段：
int(自增长），float，char，varchar，datetime，date，text，enum， set。
并且在自增长的int类型字段上有主键，varchar类型字段上有普通索引
2，给该表添加一个int字段，默认值是18；
3，修改表中char类型字段设定的长度；
4，修改表名。
5，再创建跟前面那个同样的表，表的名字在前一个名字基础上加一个“2”，
但其表类型是myisam，观察/data目录下的表文件跟前一个表的异同。
///////////////////////////////////////////////////////////////////////////
点评：
char，varchar要加长度
enum， set要加选项
加主键： id  int  auto_increment primary key
修改长度：alter  table  tab1  change  f1  f1 char(20) not null;	//假设原来长度是10
修改表名：alter table tab1 rename to tab2
*/
















