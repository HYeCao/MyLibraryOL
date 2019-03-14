<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/6
 * Time: 21:09
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统管理员界面</title>
    <style>
        .bg{
            background:url("admin.jpg") no-repeat;
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
            border-style :none;
            text-align:center;
            height:50px;
            width:100%;
            font-size:20px;
        }
        button.two{
            background-color: Transparent;
            border-style :none;
            text-align:center;
            height:100%;
            width:100%;
            font-size:20px;
        }
        .add_box{
            padding:20px;
            margin:20px;
            margin-left: 300px;
            width:800px;
            font-size: 20px;
        }
        .add_button{
            width:200px;
            height: 25px;
            margin-left: 70px;
            margin-top: 15px;
            font-size: 20px;
            border-radius: 8px;
        }
        .add_input{
            width:450px;
            height:25px;
            margin-top: 10px;
            display:inline-block;
        }
        .add_left{
            width:150px;
            display:inline-block;
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
</head>
<body class="bg">
<div   id="container1" style="width:100%;height:42px;background-color:rgba(255,255,255,0.5);">
    <div id="container1-1" style="width:30%;height:40px;float:left;">
        <table  style="width:100%;height:100%;" align="left">
            <td style="font-size:25px">Admin Of Bibliosoft</td>
        </table>
    </div>

    <div id="container1-2" style="width:50%;height:40px;float:left;">
        <table  style="width:100%;height:100%;text-align:center;">
            <td style="font-size:25px">Welcome administrator</td>
        </table>
    </div>

    <div id="container1-3" style="width:20%;height:40px;float:right;">
        <button type="button" class="two" value="确定"
                onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
            Logout
            <?php
            /**
             *该按钮用于系统管理员注销账户
             *This button is used by the system administrator to cancel the account.
             */
            ?>
        </button>
    </div>
</div>
<div class="one" id="container2-1" style="width:16%;height:660px;float:left;">
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
    <a href="adminpassword.php">
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

    <button type="button" class="one" value="确定"
            onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
            onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
        Search books
        <?php
        /**
         *该按钮用于系统管理员查询书籍
         *This button is used by system administrators to search books
         */
        ?>
    </button>


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

    <button type="button" class="one" value="确定"
            onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
            onmouseout="this.style.backgroundColor='';this.style.color='#000000';">
        Search readers
        <?php
        /**
         *该按钮用于系统管理员查询读者
         *This button is used by system administrators to search readers
         */
        ?>
    </button>
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
</div>
<div class="add_box">
<form action="AdminAction.php?action=add" method="post">
    <ul style="list-style:none">
        <li>
            <div class="add_left">ID:</div>
            <div class="add_input"><input class="add_input" type="text" name="adminID" ></div>
        </li>
        <li>
            <div class="add_left">Name:</div>
            <div class="add_input"><input class="add_input" type="text" name="adminName" ></div>
        </li>
        <li>
            <div class="add_left">Password:</div>
            <div class="add_input"><input class="add_input" type="text" name="password" ></div>
        </li>
        <li>
            <div class="add_left">permission:</div>
            <div class="add_input"><input class="add_input" type="text" name="permission"></div>
        </li>
        <li>
            <input class="add_button" type="submit" value="Add" align="center">
            <input class="add_button" type="reset" value="Reset" align="center">
        </li>
    </ul>
</form>
</div>
<div class="footer">
    CopyRight @2018 NPU.SPM-A2 All Rights Reserved
    &nbsp&nbsp&nbspBrowser Support:&nbspIE(9.0)&nbsp Chrome &nbspFireFox &nbsp360(7.0) &nbspSogou(6+) &nbspQQ
</div>
</body>
</html>
