delete语句
    delete from 表名 [where + 条件]
    eg:delete from a where name='朋友';
    
update语句
    update 表名 set 列名='更新值' [where + 条件]
    eg:update a set name age='18' where name='b';
selete语句
    selete 列名 from 表名 [where + 条件][order by + 排序列名][asc/desc]
    eg:select * from a //查询a表中所有的行和列
    
    eg:select i,j,k from a where f=5;//查询a表f=5的所有行，并显示i，j，k三列
    
    eg:select name as 姓名 from a where email is null;//查询a表中email为空的所有行，显示name列，并将name列改名为姓名
    
    eg:select top 6 name from a;//查询a表中name列的前六个
    
    eg:select top 60 percent name from a;//查询a表中name列的前百分之六十
    
    eg:select name from a where score >= 60 order by desc;//查询a表中分数不小于60分的所有行，并降序显示name列
    
    eg:select * from a where name like "赵%";//like 适合char 和 varchar类型查询
    
    eg:select * from a where age bewteen 18 and 20;//查询a表中年龄在18~20之间的所有记录
    
    eg:select name from a where address in ('shanghai','beijing');//查询a表中address值为北京，上海的记录，显示name字段
    
    eg:select a.name,b.chengji from a,b where a.name=b.name;//查询a，b两表中那name字段相同的记录，并显示a中的name字段，b中的chengji字段
    <=> select a.name,b.chengji from a inner join b on (a.name=b.name);//【内联接】
 insert语句
    insert into 表名 [列名] valules 列值
    eg:insert into M('name','pwd','code') values('tony','admin','abcd');
    
    
