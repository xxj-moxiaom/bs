<script>
//删除确认
function del(){
 if(!window.confirm('是否要删除数据??'))
	return false;
}
</script>
<?php
$page_title = '删除信息';
require_once("./includes/mysql_connect.php");
include ('./includes/header.html');
$sql = "SELECT * FROM users";
//执行SQL命令返回结果
$result = @mysql_query ($sql,$dbc); 
//返回结果中的纪录数
$num = mysql_num_rows($result);
if ($num > 0) {
	echo "<p>共有 $num 位注册用户</p>\n";
echo <<<TR
	<form name="form1" action="delete_ok.php" method="post">
    <table align="center" width="100%" border="0">
    <caption><h1>学生信息</h1></caption>
    <th><input type="submit" value="删除选择" onclick = "return del();">
    </th><th>编号</th><th>用户名</th><th>邮箱</th><th>注册日期</th>
TR;
while($row = mysql_fetch_row($result)){
  echo '<tr>';
  echo "<td align='center'><input type='checkbox' name='chk[]' value='{$row[0]}'>";
  echo '<td>'.$row[0] .'</td>';
  echo '<td>'.$row[1] .'</td>';
  echo '<td>'.$row[3] .'</td>';
  echo '<td>'.$row[4] .'</td>';
  echo '</tr>';
}
	echo'</table>';
	mysql_free_result ($result); 
} else {
	echo '<p class="error">当前还没有注册用户。</p>';
}
include ('./includes/footer.html');
?>
