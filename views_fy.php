<?php 
$page_title = '查看当前所有用户';
include ('./includes/header.html');
echo '<h1 id="mainhead">查看用户</h1>';
//包含连接数据文件
require_once("./includes/mysql_connect.php");

mysql_query("SET NAMES UTF8");
//定义每页显示的记录数
$pagesize=8;

//mysql DATE_FORMAT函数把注册日期格式化
$sql = "SELECT user_id,name, email,DATE_FORMAT(reg_date, '%Y年%m月%d日') AS dr  FROM users";	
$total = mysql_query($sql);  //执行SQL语句
$totalNum = mysql_num_rows($total);  //总记录数
$pagecount = ceil($totalNum/$pagesize); //总页数
(!isset($_GET['page']))?($page = 1):$page = $_GET['page']; //当前显示页
//当前页数大于总页数，把当前页定义为总页数
($page <= $pagecount)?$page:($page = $pagecount);
//当前页的第一条记录
$f_pageNum = $pagesize * ($page-1);   

//通过limit控制查询数量
$sqlstr1 = $sql." limit ".$f_pageNum.",".$pagesize; 

$result = mysql_query($sqlstr1) or die("SQL语句执行失败");

if ($total > 0) { 
	
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
	
} else { 
	echo '<p class="error">当前还没有注册用户。</p>';
}

echo '<tr><td colspan=8 ><span class=ct>';
  echo"共".$totalNum."条记录&nbsp;&nbsp;&nbsp;&nbsp;"; 
  echo"第".$page."页/共".$pagecount."页&nbsp;&nbsp;&nbsp;&nbsp;";
  if($page!=1){  //如果当前页不是第1页,则输出有链接的首页与上一页
	  echo "<a href='?page=1'>首页</a>&nbsp;";
	  echo "<a href= '?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
 }else{//否则输出无链接的首页、上一页
	  echo"首页&nbsp;上一页&nbsp;&nbsp;";
  }
  if($page!=$pagecount){//如果当前页不是最后一页，则输出有链接的下一页和尾页
	  echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
	  echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;";
	}else{//否则输出无链接的下一页、尾页
	  echo "下一页&nbsp;尾页&nbsp;&nbsp;";
 }
echo'</tr></table>';
mysql_free_result ($result); 
mysql_close(); 
include ('./includes/footer.html'); 
?>
