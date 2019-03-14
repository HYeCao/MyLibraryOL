<?php
/**
 * Created by PhpStorm.
 * User: gaoyafu
 * Date: 2018/10/3
 * Time: 18:50
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
            border-style :none;
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
<div class="one" id="container2-1" style="width:200px;height:659px;float:left;background-color:rgba(255,255,255,0.4);">
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

<?php
//1. 链接数据库
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");
$id=$_GET['id'];
//2.执行sql
$sql_select = "select * from admin_table where adminID='$id'and permission='1'";
$stmt = mysqli_query($conn,$sql_select);
// var_dump($stmt);
// die();
if ($stmt->num_rows>0) {
    $guanli = mysqli_fetch_assoc($stmt); // 解析数据
}else{
    die("no have this id:{$_GET['id']}");
}
?>
<div id="content2-2" style="height:550px;width:82%; float:left;">
    <p></p>
    <form action="adminaction.php?action=change" method="post">
        <table border="1" align="center">
            <tr>
                <td width="150px" height="40px" style="font-size:20px">librarianId</td>
                <td width="150px" height="40px" style="font-size:20px">librarianName</td>
                <td width="150px" height="40px" style="font-size:20px">password</td>
                <td width="150px" height="40px" style="font-size:20px">email</td>
            </tr>
            <tr>
                <td><input type="text" name="id" value="<?php echo $guanli['adminID'];?>" readonly></td>
                <td><input type="text" name="name" value="<?php echo $guanli['adminName'];?>"></td>
                <td><input type="text" name="password" value="<?php echo $guanli['password'];?>">
                <td><input type="text" name="email" value="<?php echo $guanli['adminEmail'];?>">
            </tr>
        </table>
        </table>
        <table align="center">
            <tr>
                <td width="120px" height="40px">
                    <input type="submit" style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:70px; font-size:15px;" value="change" align="center"
                           onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                           onmouseout="this.style.backgroundColor='';this.style.color='#000000';"
                    ></td>
                <td width="120px" height="40px">
                    <input type="reset" style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:70px; font-size:15px;" value="reset" align="center"
                           onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                           onmouseout="this.style.backgroundColor='';this.style.color='#000000';"></td>
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
