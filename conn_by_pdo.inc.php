<?php 
// 定义页面信息类型text/html
// 定义页面信息编码utf-8，不然显示到页面的中文是乱码
header("content-type:text/html;charset=utf-8");
//定义PDO连接的三个常量
//DSN：连接字符串，说明需要哪种数据库驱动
//需要的数据库名，主机IP
//连接时的字符集utf8，这个很重要，不然数据库得来的中文数据是乱码
//USERNAME:远程数据库用户名
//PASSWORD：远程数据库用户密码
define("DSN","mysql:dbname=u1;host=57f82bf098e71.gz.cdb.myqcloud.com:9617;charset=utf8");
define("USERNAME","stu");
define("PASSWORD","gcc_stu1");
// 如果出错，捕获出错信息，如果没有出错，则证明连接数据是成功的。
try {
	$conn=new PDO(DSN,USERNAME,PASSWORD);
} catch (Exception $e) {
	echo $e->getMessage();
}
?>
