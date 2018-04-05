
<?php
require_once("./includes/mysql_connect.php");
$page_title = '修改信息';
include ('./includes/header.html');
$sql = "SELECT * FROM users";
//执行SQL命令返回结果
$result = @mysql_query ($sql,$dbc); 
//返回结果中的纪录数
$num = mysql_num_rows($result);

if ($num > 0) { 
	echo "<p>共有 $num 位注册用户</p>\n";
	
	echo '<table align="center" width="100%" cellspacing="0" cellpadding="5">';
echo <<<TR
	<tr>
		<td><b>序号</b></td>
		<td><b>用户名</b></td>
		<td><b>邮箱</b></td>
		<td><b>操作</b></td>
		</tr>
TR;
while($row = mysql_fetch_row($result)){
  echo '<tr>';
  echo '<td>'.$row[0] .'</td>';
  echo '<td>'.$row[1] .'</td>';
  echo '<td>'.$row[3] .'</td>';
  echo "<td><a href='update_form.php?id=$row[0]'>修改</td>";
  echo '</tr>';
}
	echo'</table>';
	
	mysql_free_result ($result); 

} else { 
	echo '<p class="error">当前还没有注册用户。</p>';
}

mysql_close(); 
include ('./includes/footer.html');
?>
