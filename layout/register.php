<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link href="../includes/css/reg.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--<h4>基本思路:</h4>-->
<!--<p>1.头部,主体,尾部全部放在一个容器内统一设置</p>-->
<!--<p>2.子块只须设置高度即可</p>-->
<!-- DOM结构 -->
<div class="container">
    <div class="header">
<!--        <a href="index.php"><img src="./includes/img/logo.png"></a>-->
     <a href="../index.php" style="text-decoration:none;font-weight: bold;padding-left: 100px;font-size: 1cm">KidStory</a>
        <span style="font-size:22px;padding-left: 30px">欢迎注册</span>
       <span style="padding-left: 700px">已有帐号?<a href="login.html"">请登录</a></span>

    </div>
    <div class="main">
        <!--3. 子元素是块元素:<br>-->
        <!--a.水平居中:子元素设置左右自动: margin: auto;<br>-->
        <!--b.垂直居中:与多行内联文本处理方式一致:display:table-cell;vertical-align:middle-->
        <div class="box3 ">
            <div class="child">
                <h2 >请注册：</h2>
                <form action="register.php" method="post" name="regform" onclick="check()">
                    <table width="400" height="500" border="0" rules="none">
                        <tr >
                            <td>用户名: </td>
                            <td><input type="text" name="name" size="20" maxlength="40" height="10" placeholder="请输入用户名"
                                       value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>邮件:</td>
                            <td><input type="text" name="email" size="20" maxlength="40" placeholder="请输入邮件"
                                       value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>密码:</td>
                            <td><input type="password" name="password1" size="20" maxlength="40" placeholder="请输入密码" /></td>
                        </tr>
                        <tr>
                            <td>确认密码: </td>
                            <td><input type="password" name="password2" size="20" maxlength="40"  placeholder="请输入确认密码"/></td>
                        </tr>
<!--                        <tr>-->
<!--                            <td>验证码：</td>-->
<!--                            <td><input type="text" name="code" size="15" maxlength="40" placeholder="请输入验证码">-->
<!--                                <span> <img src="../includes/democode.php"></span></td>-->
<!--                        </tr>-->
                        <tr>
                            <td colspan="2"><div align="center">
                                    <input type="submit" name="Submit" value="注册"
                                           style="height: 30px;width: 100px;background-color: red "
                                    />
                            </div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</div>
    <div class="footer">
        <?php
        include('../includes/footer.html')
        ?>>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
    $errors=array();
    if(empty($_POST['name']));
    {
        $errors[]='您忘记输入你的用户名';
    }
    if (empty($_POST['email'])){
        $errors[]='您忘记输入的email';
    }
    if(!empty($_POST['password1'])) {
        if($_POST['password1']!=$_POST['password2'])
        {
            $errors[]='两次输入密码不同';
        }
        else {
            $errors[]='您忘记输入的密码';
        }
    }
    if(empty($errors))
    {
        require_once('../includes/sys_connect.php');
        //判断email是否已存在
        $sql="SELECT user_id FORM users WHERE user_email='{$_POST['email']}'";
        $result=mysql_query($sql);
        if(mysql_num_rows($result)==0)
        {
            $sql="INSERT INTO 'users'('user_id','user_name','user_pwd','user_email',)
                   VALUES(NULL,'{$_POST[name]}',SHA1('{$_POST['password1']}'),'{$_POST['email']}'";
            mysql_query("set names uf8");
            $result=@mysql_query($sql);
            if($result){

                echo '<script>alert("注册成功")</script>';
                include ('./includes/footer.html');
                exit();
            }
            else{
                echo '<script>alert("系统错误")</script>';
//				echo '<h1 id="mainhead">系统错误！</h1>
//				<p class="error">很抱歉您暂时无法注册。<br />';
//				echo '<p>' . mysql_error() ;
//				include ('./includes/footer.html');
                exit();
            }
        }
        else {
            echo '<script>alert("对不起，这个email地址已被注册，请重新选择")</script>';
//			echo '<h1 id="mainhead">错误！</h1>
//			<p class="error">对不起，这个email地址已被注册，请重新选择。</p>';
        }
        mysql_close();
    }
    else {
//		echo '<h1 id="mainhead">错误！</h1>
//		<p class="error">出现以下错误：<br />';
        foreach ($errors as $msg) {
//		echo " - $msg<br />\n";
            echo '<script>alert("'.$msg.'");</script>';}
//		echo '</p><p>请重填：</p><p><br /></p>';

    }

}