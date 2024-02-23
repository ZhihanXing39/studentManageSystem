# 这是一个基于PHP的学生管理系统

这是一个基于PHP的学生管理系统，做的非常的简陋。我希望可以通过这个项目来锻炼我的能力，因此它可能时常会更新。如果要运行此项目，你需要自己编写一个**config.json**文件放在项目根目录。以下是示例：

```json
{
    "host": "yourhost",
    "port": "yourport",
    "database": "yourdatabasename",
    "username": "username",
    "password": "password"
}
```

另外请你自己创建数据库和表结构，我在代码中没有编写创建数据库和表结构的代码。如果你很闲，想熟悉一下SQL操作，请按照以下结构创建表：
**student**
|字段名|数据类型|
|---|---|
|id|int|
|name|varchar(20)|
|gender|char(4)|
|klass|varchar(20)|

**course**
|字段名|数据类型|
|---|---|
|id|int|
|name|varchar(20)|
|teacher|varchar(20)|

**score**
|字段名|数据类型|
|---|---|
|sid|int|
|cid|int|
|sname|varchar(20)|
|cname|varchar(20)|
|grade|int|

或者你可以直接使用release中的sql文件
我知道我做的很烂，还希望轻喷。
