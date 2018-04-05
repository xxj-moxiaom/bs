<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="materialize.css">
    <script src="materialize.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <link rel="stylesheet" href="../includes/login_register/css/reset.css" />
    <link rel="stylesheet" href="../includes/login_register/css/common.css" />
    <style>
        html, body, .block {
            height: 700px;
            background-image: url(./includes/img/bg3.jpg);
        }
        nav ul li a:hover, nav ul li a.active {

        }
        footer {
            padding-left: 0;
        }
    </style>
</head>
<body >
<div id="blue" class="block ">
    <nav class="pushpin-demo-nav" data-target="blue">
        <div class="nav-wrapper red">
            <div class="container">
                <a href="new.html" class="brand-logo">story</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="login.html"><b>登录</b></a></li>
                    <li><a href="register.html"><b>注册</b></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrap login_wrap">
        <div class="content">
            <div class="logo"></div>

            <div class="login_box">

                <div class="login_form">
                    <div class="login_title">
                        登录
                    </div>
                    <form action="" method="post">

                        <div class="form_text_ipt">
                            <input name="username" type="text" placeholder="手机号/邮箱">
                        </div>
                        <div class="ececk_warning"><span>数据不能为空</span></div>
                        <div class="form_text_ipt">
                            <input name="password" type="password" placeholder="密码">
                        </div>
                        <div class="ececk_warning"><span>数据不能为空</span></div>
                        <div class="form_check_ipt">
                            <div class="left check_left">
                                <label><input name="" type="checkbox"> 下次自动登录</label>
                            </div>
                            <div class="right check_right">
                                <a href="#">忘记密码</a>
                            </div>
                        </div>
                        <div class="form_btn">
                            <button type="button">登录</button>
                        </div>
                        <div class="form_reg_btn">
                            <span>还没有帐号？</span><a href="register.html">马上注册</a>
                        </div>
                    </form>
                    <!--<div class="other_login">-->
                    <!--<div class="left other_left">-->
                    <!--<span>其它登录方式</span>-->
                    <!--</div>-->
                    <!--<div class="right other_right">-->
                    <!--<a href="#">QQ登录</a>-->
                    <!--<a href="#">微信登录</a>-->
                    <!--<a href="#">微博登录</a>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">相关网站</h5>
                <ul>
                    <li><a class="white-text" target='_blank' href="http://www.okgoes.com">完美起航</a></li>
                    <li><a class="white-text" target='_blank' href="http://note.okgoes.com/">起航笔记</a></li>
                    <li><a class="white-text" target='_blank' href="http://vuematerial.materializecss.cn/">Vue Material中文</a></li>
                    <li><a class="white-text" target='_blank' href="http://blog.okgoes.com/">起航博客</a></li>
                    <li><a class="white-text" target='_blank' href="http://forum.okgoes.com/forum.php">起航论坛</a></li>
                </ul>
            </div>
            <div class="col l4 s12">
                <h5 class="white-text">学习交流</h5>
                <p class="grey-text text-lighten-4">我们为此开发了一个关于Materialize UI框架学习的论坛，你可以在这个论坛分享你的学习经验，同时得到我们的技术帮助。</p>
                <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=a483a26b5f09e710a058154e816b89366870562955be319050b7d096ffe0f9c2"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="materialize学习交流" title="materialize学习交流"></a>
                <br/>
                <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="http://c.materializecss.cn/">Materialize交流社区</a>
            </div>
            <div class="col l4 s12" style="overflow: hidden;">
                <h5 class="white-text">联系我们</h5>
                <!--
                <iframe src="http://ghbtns.com/github-btn.html?user=dogfalo&repo=materialize&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
                 -->
                <a href="http://wpa.qq.com/msgrd?V=3&amp;uin=473166512&amp;Site=完美起航&amp;Menu=yes&amp;from=okgoes" target="_blank" title="QQ"><img src="/images/site_qq.jpg" alt="QQ" style="vertical-align: middle;"></a>
                <br>
                <a href="mailto:473166512@qq.com" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">473166512@qq.com</a>
                <br>
                <div><h5 class="white-text">网站信息</h5></div>
                <div><a class="white-text" href="http://www.miitbeian.gov.cn/">赣ICP备15002760号-4</a></div>
                <div class="g-follow" data-annotation="bubble" data-height="24" data-href="https://plus.google.com/108619793845925798422" data-rel="publisher"></div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014-2016 Materialize, All rights reserved.
            <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
        </div>
    </div>
</footer>
</body>
</html>