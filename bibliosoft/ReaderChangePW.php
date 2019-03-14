
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChangePW</title>
    <style>
        .bg{
            background: url("img/p3.jpg") ;
            background-size:cover;
        }
        .input{width: 200px;height:25px;font-size: 16px;border-radius: 5px;border: 1px solid rgb(180, 180, 180);}
        .button{ text-align:center; width: 90px;height:32px;font-size: 18px;margin-left: 10px;
            letter-spacing:0;border-radius: 4px;border: 1px solid rgb(180, 180, 180); }
        a:hover{color:#ff3300}
        .wrapper {
            float: left;
            width: 600px;
            height:500px;
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
            padding-left: 0px;

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
            padding: 24px 24px;
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

        .loginBox.RegBoxButtons{
            border-top: 0px solid #FFF;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 5px;
            line-height: 28px;
            overflow: hidden;
            padding: 0px 0px;
            vertical-align: center;
            filter: alpha(Opacity=80);
            -moz-opacity: 0.5;
            opacity: 0.5;
        }

    </style>
</head>

<body class="bg">
<p><strong>To get your password back,please input your readerName and e-mail：</strong></p>

<div class="wrapper">
    <div class="loginBox">
        <div class="loginBoxCenter">
            <div class="header">

                <h1>Retrieve the password</h1>
                <hr />
                <form action="ReaderSendMail.php" method="post">

                <p><label for="text">Username：</label></p>
                <p><input type="text" id="username" name="readerName" class="loginInput" autofocus="autofocus" required="required" autocomplete="off" placeholder="please input UserName" value="" /></p>
                <p><label for="email">email：</label></p>
                <p><input type="text" id="email" name="email" class="loginInput" required="required" placeholder="please input e-mail" value="" /></p>
                 <div class="loginBoxButtons" >
                <p><input type ="submit"  name="submit" value="submit" class="button" class="loginBox"></p>
                 </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>