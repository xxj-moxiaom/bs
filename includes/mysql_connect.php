<?php 

$hostname = "localhost";
$database = "mydatabase";
$username = "root";
$password = "";

$dbc = mysqli_connect($hostname, $username, $password) OR die ('连接数据库失败：' . mysqli_error());
@mysqli_select_db($dbc,$database) OR die ('选择数据库失败：' . mysqli_error());
//设置字符编码
mysqli_query(" set  charset = utf8 " ) ;
?>