<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        a{
            text-decoration: none;
        }
        .bg {
            background: url("img/p2.jpg");
            background-size: cover;
            height: 500px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Borrow</title>

</head>
<body class="bg">
<h2 style="text-align: center;font-size: 200%;font-family: 楷体">Alter the Information of readers</h2>
<div style="margin: 0 auto;width: 500px;">
    <a href="ReaderTel.php" style="font-size: 150%;font-family: 楷体">&nbsp&nbsp&nbspTEL</a>
    <a href="ReaderEmail.php" style="font-size: 150%;font-family: 楷体">&nbsp&nbsp&nbsp&nbsp&nbspE-mail</a>
    <a href="ReaderPassword.php" style="font-size: 150%;font-family: 楷体">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword</a>
</div>
<hr>
<script>
    function password() {
        var id=(document.getElementById("password_name")).value;
        var test1= (document.getElementById("password_1")).value;
        var test2= (document.getElementById("password_2")).value;
        // alert(id+test1);
        if(id==""||test1==""||test2==""){
            alert("Please enter full information")
        }else{
            if(test1==test2){
                window.location='ReaderPasswordAction.php?action=password&id='+id +'&password='+test1;
            }else {
                alert("Two Passwords are different")
            }
        }
    }
</script>
<form>
    <table border="1" align="center">
        <tr>
            <td width="200px" height="40px" style="font-size:20px">ReaderName</td>
            <td width="300px" height="40px" style="font-size:20px">
                <input type="text" id="password_name" style="height:35px;width:300px;"></td>
        </tr>
        <tr>
            <td width="200px" height="40px" style="font-size:20px">New Password</td>
            <td width="300px" height="40px" style="font-size:20px">
                <input type="password" id="password_1" style="height:35px;width:300px;"></td>
        </tr>
        <tr>
            <td width="200px" height="40px" style="font-size:20px">Confirm Password</td>
            <td width="300px" height="40px" style="font-size:20px">
                <input type="password" id="password_2" style="height:35px;width:300px;"></td>
        </tr>
        <tr>
            <td align="center" width="200px" height="40px">
                <input type="button" style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:70px; font-size:15px;" value="OK" align="center"  onclick="password()"
                       onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                       onmouseout="this.style.backgroundColor='';this.style.color='#000000';"></td>
            <?php
            /**
             *该按钮用于向数据库提交用户填写的数据
             *Submit data to the database
             */
            ?>
            <td align="center" width="300px" height="40px">
                <input type="reset" style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:70px; font-size:15px;" value="RESET" align="center"
                       onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                       onmouseout="this.style.backgroundColor='';this.style.color='#000000';"></td>
            <?php
            /**
             *重置填写的数据
             *Reset the filled data
             */
            ?>
        </tr>

    </table>
</form>
</body>
</html>
