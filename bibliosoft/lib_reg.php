<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>读者注册界面(Reader Register)</title>
    <style>
        .bg {
            background-image:url("img/bg.jpg");
            background-repeat: repeat;
        }

        /*背景设置*/
        .wrapper {
            margin: 145px 0 145px auto;
            width: 900px;
        }

    </style>
</head>
<body class="bg">
<!-- bg 背景类定义-->

<!--大标题设置-->
<h1>Reader Register</h1>
<hr>
<form action="lib_register_do.php" method="POST" >
   <h3> 用户名(UserName)：</h3>
    <input type="text" name="username" size="60" maxlength="15" required="required" placeholder="必须填写用户名">
    <br>

   <h3>登录密码(Password)：</h3>
    <input type="password" name="password" size="60"maxlength="25">
    <br>

   <h3>确认密码(Confirm Password)：</h3>
    <input type="password" name="confirmPassword" size="60" maxlength="25">
    <br>

    <h3>邮箱（E-mail）：</h3>
    <input type="text" name="e-mail" size="60"required="required" maxlength="25">
    <br>

    <h3>联系电话（Tel)：</h3>
    <input type="text" name="tel" size="60"required="required" maxlength="25">
    <br>

    <input type="submit" name="submit" value="注册(Register)">
    <input type="reset" name="cancel" value="重填(Reset)">
</form>

</body>

</html>
