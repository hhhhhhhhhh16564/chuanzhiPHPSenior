// 创建用户

//改变密码复杂度权限
set global validate_password_policy=0;
//改变密码的最低位数（4位）
set global validate_password_length=1;

//创建用户
create user 'yanbo'@'%' identified by '1357abcd'

//指定ip创建的用户不能登录，未找到原因 ？？？？？？
create user 'yanpo'@'192.168.0.101' identified by '1357abcd'

//删除用户
drop user 'yanbo'@'192.168.0.101'


//给用户yanbo授予 text数据库所有权限
grant all on text.* to 'yanbo'@'%' identified by '1357abcd';

//给用户yanbo授予 所有数据库所有权限
grant all on *.* to 'yanbo'@'%' identified by '1357abcd';

//授予什么权限，对应取消相应的权限

// 这两个删除权限分别对应上边的增加权限
revoke ALL  on text.* from 'yanbo'@'%';
grant all on *.* to 'yanbo'@'%' identified by '1357abcd';



