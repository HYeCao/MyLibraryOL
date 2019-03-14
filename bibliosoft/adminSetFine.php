<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/25
 * Time: 20:37
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Fine ID</title>
    <style>
        .bg{
            background:url("img/admin.jpg") no-repeat;
            background-size:cover;
        }
        div.one{
            margin:1px;
            border-width:1px;
            border-right-color:#FFFFFF;
            border-right-style:solid;
        }
        button.one{
            background-color: Transparent;
            text-align:center;
            height:50px;
            width:100%;
            font-size:20px;
            border-right-width:0;
            border-bottom-width:1px;
            border-bottom-color:#E0FFFF;

        }
        button.two{
            background-color: Transparent;
            border-style :none;、
            text-align:center;
            height:100%;
            width:100%;
            font-size:20px;
        }
        div.footer{
            background: rgba(255,255,255,0.7);
            margin: auto;
            position: center;
            float:right;
            text-align: center;
            width:100%;
        }
    </style>
    <script>
        function setFine() {
            var fine = (document.getElementById("fine")).value;
            var fine1 = parseInt(fine);
            if (fine == "") {
                alert("Please enter full information")
            } else {
                if (fine1!= fine) {
                    alert("Please enter the correct number")
                } else {
                    if (fine <= 0) {
                        alert("The fine Should be greater than 0")
                    } else {
                        window.location = 'adminaction.php?action=setFine&fine=' + fine;
                    }
                }
            }
        }
    </script>
</head>
<body class="bg">
<div   id="container1" style="width:100%;height:60px;background-color:rgba(255,255,255,0.7)">
    <div id="container1-1" style="width:30%;height:58px;float:left;">
        <img width=70% height=100% src="img/admin1.png" />
    </div>
    <div id="container1-2" style="width:20%;height:58px;float:right;">
        <a href="index.php">
            <button type="button" class="two" value="确定"
                    onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                    onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
                Logout
                <!--            /**-->
                <!--             *该按钮用于系统管理员注销账户-->
                <!--             *This button is used by the system administrator to cancel the account.-->
                <!--             */-->

            </button>
        </a>
    </div>
    <div id="container1-3" style="width:40%;height:58px;float:right;">
        <table  style="width:100%;height:100%;" align="left">
            <tr><td style="font-size:33px">Admin Of Bibliosoft</td></tr>
        </table>
    </div>

</div>
<div class="one" id="container2-1" style="width:200px;height:659px;float:left;background-color:rgba(255,255,255,0.6);">

    <a href="adminAddLibrarian.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Add  a librarian
            <?php
            /**
            该按钮用于系统管理员添加图书管理员
            This button is used by system administrators to add librarians
             */
            ?>
        </button>
    </a>

    <a href="adminPassword.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Reset the password
            <?php
            /**
             *该按钮用于系统管理员重置密码
             *This button is used by system administrators to reset the password
             */
            ?>
        </button>
    </a>

    <a href="adminShowLibrarian.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Edit a librarian
            <?php
            /**
             *该按钮用于系统管理员查询书籍
             *This button is used by system administrators to search books
             */
            ?>
        </button>
    </a>

    <a href="adminSearchLibrarian.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Search librarians
            <?php
            /**
             *该按钮用于系统管理员查询图书管理员
             *This button is used by system administrators to search librarians
             */
            ?>
        </button>
    </a>

    <a href="adminShowLibrarian.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Delete a librarian
            <?php
            /**
             *该按钮用于系统管理员删除图书管理员
             *This button is used by system administrators to delete a librarian
             */
            ?>
        </button>
    </a>

    <a href="adminSetFine.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Change fine value
            <?php
            /**
             *该按钮用于系统管理员更改罚金
             *This button is used by system administrators to change fine value
             */
            ?>
        </button>
    </a>

    <a href="adminSetReturnPeriod.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Return period
            <?php
            /**
             *超管能够设置/修改书籍归还期限[默认为30天]
             *This button is used by system administrators to set/modify book return period
             */
            ?>
        </button>
    </a>

    <a href="adminSetDeposit.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Security Deposit
            <?php
            /**
             *该按钮用于系统管理员更改保证金
             *This button is used by system administrators to change security deposit
             */
            ?>
        </button>
    </a>
    <a href="adminSearchLibrarian.php">
        <button type="button" class="one" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            &nbsp&nbsp&nbsp&nbsp Recovery &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Librarian password
            <?php
            /**
             *该按钮用于超管能够帮助图书管管员找回其密码
             *This button is used by system administrators to recovery Librarian password
             */
            ?>
        </button>
    </a>
</div>
<div id="content2-2" style="height:550px;width:82%; float:left;">
    <p></p>
<form>
    <table border="1" align="center">
        <tr>
            <td width="200px" height="40px" style="font-size:20px">set fine</td>
            <td width="300px" height="40px" style="font-size:20px">
                <input type="number" id="fine" style="height:35px;width:300px;" placeholder="please input the new fine  "></td>
        </tr>
        <tr>
            <td align="center" width="200px" height="40px">
                <input type="button" style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:70px; font-size:15px;" value="OK" align="center"  onclick="setFine()"
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
</div>
<div class="footer">
    CopyRight @2018 NPU.SPM-A2 All Rights Reserved
    &nbsp&nbsp&nbspBrowser Support:&nbspIE(9.0)&nbsp Chrome &nbspFireFox &nbsp360(7.0) &nbspSogou(6+) &nbspQQ
</div>
</body>
</html>