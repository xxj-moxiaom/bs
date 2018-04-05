<?php
$page_title = '修改成功';
require_once("./includes/mysql_connect.php");
include ('./includes/header.html');

$name=$_POST['users'];
$email=$_POST['email'];
$date=$_POST['date'];
$id=$_POST['id'];

if(!($name and $email and $date)){
  echo "输入不允许为空。<a href='javascript:onclick=history.go(-1)'>返回</a>";
}else{
 // $sql ="update users set name='{$name}',email='{$email}',reg_date='{$email}' where user_id={$id}";
 //$sql = "update users set name='".$name."',email='".$email."',reg_date='". $date."'where user_id=".$id;
 $sql = "update users set name='$name',email='$email',reg_date='$date'where user_id=".$id;

  $result=mysql_query($sql,$dbc);
  if($result){
    echo "修改成功<a href='view.php'>查看</a>";
  }else{
    echo "修改失败。";
  }
}
include ('./includes/footer.html');
?>

