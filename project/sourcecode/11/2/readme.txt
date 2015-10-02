setcookie()函数定义一个和其余HTTP头一起发送的Cookie，它必须最先输出，在任何脚本输出之前包括<html>和<head>标签。
如果在setcookie()函数之前有任何的输出，那么setcookie就会失败并返回false。因此本程序不能添加标题，否则程序出错。