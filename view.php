<?php 
$page_title = '查看当前所有用户';
include ('./includes/header.html');
echo '<h1 id="mainhead">查看用户</h1>';
//包含连接数据文件
require_once("./includes/mysql_connect.php");
//mysql DATE_FORMAT函数把注册日期格式化
$sql = "SELECT user_id,name, email,DATE_FORMAT(reg_date, '%Y年%m月%d日') AS dr  FROM users";	
//设置字符编码	
mysql_query(" set  names utf8 " ) ;
//执行SQL命令返回结果
$result = @mysql_query ($sql); 
//返回结果中的纪录数
$num = mysql_num_rows($result);

if ($num > 0) { 
	echo "<p>共有 $num 位注册用户</p>\n";
	echo '<table align="center" cellspacing="0" cellpadding="5">';
echo <<<TR
	<tr>
		<td><b>序号</b></td>
		<td><b>用户名</b></td>
		<td><b>邮箱</b></td>
		<td><b>注册日期</b></td>
		
		</tr>
TR;
while($row = mysql_fetch_assoc($result)){
  echo <<<TR
   <tr>
	<td>{$row['user_id']}</td>
	<td>{$row['name']}</td>
	<td>{$row['email']}</td>
	<td>{$row['dr']}</td>
  </tr>
TR;
  }
	echo'</table>';
	mysql_free_result ($result); 

} else { 
	echo '<p class="error">当前还没有注册用户。</p>';
}

mysql_close(); 
include ('./includes/footer.html'); 
?>
