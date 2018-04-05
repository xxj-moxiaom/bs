<?php
$page_title = '修改信息';
require_once("./includes/mysql_connect.php");
include ('./includes/header.html');
$sql="select * from users where user_id=".$_GET['id'];
//执行SQL命令返回结果
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
?>
<form name="form1" method="post" action="update_ok.php">
  <table border="0">
  <caption><h2>用户信息修改</h2></caption>
  <tr><td>用户名：</td>
    <td><input type="text" name="users" value="<?php echo $row[1]?>"></td>
  </tr>
  <tr><td>邮箱：</td>
    <td><input type="text" name="email" value="<?php echo $row[3]?>"></td>
  </tr>
  <tr><td>注册日期：</td>
    <td><input type="text" name="date" value="<?php echo $row[4]?>"></td>
 </tr>
  
  <tr><td><input type="hidden" name="id" value="<?php echo $row[0]?>"></td>
    <td><input type="submit" name="submit" value="修改"></td>
  </tr>
  </table>
  </form>
  <?php
include ('./includes/footer.html');
?>
</body>
</html>