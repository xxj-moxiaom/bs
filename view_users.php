<?php 
$page_title = '查看当前所有用户';
include ('./includes/header.html');
echo '<h1 id="mainhead">查看用户</h1>';
//包含连接数据文件
require_once("./includes/mysql_connect.php");
//mysql DATE_FORMAT函数把注册日期格式化
$sql = "SELECT name, DATE_FORMAT(reg_date, '%Y年%m月%d日') AS dr FROM users ORDER BY reg_date ASC";	
//设置字符编码	
mysql_query(" set  names utf8 " ) ;
//执行SQL命令返回结果
$result = @mysql_query ($sql); 
//返回结果中的纪录数
$num = mysql_num_rows($result);

if ($num > 0) { 
	echo "<p>共有 $num 位注册用户</p>\n";
	echo '<table align="center" cellspacing="0"
	cellpadding="5">
	<tr><td><b>姓名</b></td><td><b>注册时间</b></td></tr>';

	while ($row = mysql_fetch_row($result)) {//遍历每条纪录
		echo '<tr>';                        //每遍历一条纪录输出一个行标记
		foreach($row as $field){           //循环遍历每条记录的每个字段
		  echo '<td>' .$field.'</td>';    //在单元格中显字段的值 	
		}
		echo '</tr>';
	}
    echo '</table>';
	mysql_free_result ($result); 

} else { 
	echo '<p class="error">当前还没有注册用户。</p>';
}

mysql_close(); 
include ('./includes/footer.html'); 
?>