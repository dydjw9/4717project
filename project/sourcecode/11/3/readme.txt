测试流程：

当存在SESSION的时候会有一个超链接 “请点击我查看是否失效”，这个时候会跳转到session.php页面，在session.php页面中等待60秒之后 会显示session不存在。如果等待60秒之后 session存在 则程序失败！

忠告：在测试实例之前 确定cookie是开启的。如不开启，则跳转之后直接显示 “SESSION不存在”