<!doctype html>
<div>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <style>
            .bg {
                background-image:url("img/background2.jpeg");
                background-repeat: repeat;
                background-size: auto;
            }

            /*背景设置*/
            .wrapper {
                margin: 145px 0 145px auto;
                width: 900px;
            }
            /*登录框大小位置设置*/

            .loginBox {
                background-color: #F0F4F6;
                /*上divcolor*/
                border: 1px solid #BfD6E1;
                border-radius: 5px;
                color: #444;
                font: 14px 'Microsoft YaHei', '微软雅黑';
                margin: 0 auto;
                width: 388px;

            }
            /*登录框格式设置*/

            .loginBox .loginBoxCenter {
                border-bottom: 1px solid #DDE0E8;
                padding: 24px;
            }

            .loginBox .loginBoxCenter p {
                margin-bottom: 10px
            }

            .loginBox .loginBoxButtons {
                /*background-color: #F0F4F6;*/
                /*下divcolor*/
                border-top: 0px solid #FFF;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                line-height: 28px;
                overflow: hidden;
                padding: 20px 24px;
                vertical-align: center;
                filter: alpha(Opacity=80);
                -moz-opacity: 0.5;
                opacity: 0.5;
            }

            .loginBox .loginInput {
                border: 1px solid #D2D9dC;
                border-radius: 2px;
                color: #444;
                font: 12px 'Microsoft YaHei', '微软雅黑';
                padding: 8px 14px;
                margin-bottom: 8px;
                width: 310px;
            }

            .loginBox .loginInput:FOCUS {
                border: 1px solid #B7D4EA;
                box-shadow: 0 0 8px #B7D4EA;
            }

            .loginBox .loginBtn {
                background-image: -moz-linear-gradient(to bottom, blue, #85CFEE);
                border: 1px solid #98CCE7;
                border-radius: 20px;
                box-shadow: inset rgba(255, 255, 255, 0.6) 0 1px 1px, rgba(0, 0, 0, 0.1) 0 1px 1px;
                color: #444;
                /*登录*/
                cursor: pointer;
                float: right;
                font: bold 13px Arial;
                padding: 10px 50px;
            }

            .loginBox .loginBtn:HOVER {
                background-image: -moz-linear-gradient(to top, blue, #85CFEE);
            }


            #iframeLeft{
                width: 15%;
                height: 420px;
                float: left;
            }
            #iframeContent{
                width: 65%;
                height: 420px;
                float: top;
            }
            .loginBox.RegBoxButtons{
                border-top: 0px solid #FFF;
                border-bottom-left-radius: 8px;
                border-bottom-right-radius: 5px;
                line-height: 28px;
                overflow: hidden;
                padding: 20px 24px;
                vertical-align: center;
                filter: alpha(Opacity=80);
                -moz-opacity: 0.5;
                opacity: 0.5;
            }


        </style>
    </head>



        <body class="bg">

        <div style="left: 100px;
      position: absolute;
      top: 60px;
      color:black;
      font-size:60px;  ">
            管理员登录(Librarian Login In)</div>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><hr/>





    <!--大标题设置-->


    <div class="wrapper">



        <!--    <form action="aos/EvilEmail.html" method="post">-->
        <div class="loginBox">
            <div class="loginBoxCenter">
                <div class="header">

                    <h1>管理员登录(Login in)</h1>
                    <hr />


                </div>



                <form action="adminlogin_do.php?act=login" method="post">
                    <!--                action 是用于 提交表单的操作
                                        拥有post和get两种方法
                    -->
                    <p><label for="text">用户名(Username)：</label></p>
                    <!--autofocus 规定当页面加载时按钮应当自动地获得焦点。 -->
                    <!-- placeholder提供可描述输入字段预期值的提示信息-->
                    <p><input type="text" id="username" name="username" class="loginInput" autofocus="autofocus" required="required" autocomplete="off" placeholder="请输入用户账号" value="" /></p>
                    <!-- required 规定必需在提交之前填写输入字段-->
                    <p><label for="password">密码(Password)：</label></p>
                    <p><input type="password" id="password" name="password" class="loginInput" required="required" placeholder="请输入密码" value="" /></p>
					<a href="LibrarianChangePW.php" style="float: right;text-decoration:none">Forgot Password</a>
                    <!--设置密码输入框-->
                    <!-- required 规定必需在提交之前填写输入字段-->
            </div>
            <div class="loginBoxButtons">
                <button class="loginBtn" type="submit">登录(login in)</button>

                </form>
                <!--登录按钮设置. -->

            </div>
        </div>
    </div>
    <!--</form>-->



</div>

</body>

</html>