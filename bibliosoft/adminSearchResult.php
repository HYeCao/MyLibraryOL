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
    <script>
        function doDel() {
            var boxes1 = document.getElementsByName("test[]");
            var id = new Array();
            var num=0;
            for(var i=0;i<boxes1.length;i++){
                if(boxes1[i].checked){
                    id[i]=boxes1[i].value;
                    num++;
                }
            }
            if (num == 0){
                alert("Please choose librarian you want to delete")
            }else{
                window.location='adminaction.php?action=del&id[]='+id;
            }
        }
        function dochange() {
            var boxes2 = document.getElementsByName("test[]");
            var c=0;var m=0;
            for(var i=0;i<boxes2.length;i++){
                if(boxes2[i].checked){
                    c++;
                    m=i;
                }
            }
            if(c>1){
                alert("Cannot select multiple librarians")
            } else if(c<1){
                alert("Please select a librarian")
            } else {
                var id=boxes2[m].value;
                window.location='adminDeit.php?action=change&id='+id;
            }
        }
        function yemianxia() {
            var id ='$id';
            var name='$name';
            window.location='adminSearchResult.php?&id='+id+'&name='+name;
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

    <button type="button" class="one" value="确定"
            onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
            onmouseout="this.style.backgroundColor='';this.style.color='#000000';" onclick="dochange()">
        Edit a librarian
        <?php
        /**
         *该按钮用于系统管理员查询书籍
         *This button is used by system administrators to search books
         */
        ?>
    </button>

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

    <button type="button" class="one" value="确定"
            onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
            onmouseout="this.style.backgroundColor='';this.style.color='#000000';" onclick="doDel()">
        Delete a librarian
        <?php
        /**
         *该按钮用于系统管理员删除图书管理员
         *This button is used by system administrators to delete a librarian
         */
        ?>
    </button>

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
<div id="content2-2" style="height:350px;width:82%; float:left;">
    <p></p>
    <form >
        <table border="1" align="center">
            <tr>
                <td width="40px" height="40px" style="font-size:20px"></td>
                <td width="150px" height="40px" style="font-size:20px">librarianId</td>
                <td width="150px" height="40px" style="font-size:20px">librarianName</td>
                <td width="150px" height="40px" style="font-size:20px">password</td>
                <td width="150px" height="40px" style="font-size:20px">email</td>

            </tr>

            <?php
            $conn=mysqli_connect("localhost","root","root","bibliosoft");
            mysqli_set_charset($conn,"utf8");

            if($conn){
                        $id = $_GET['id'];
                        $name = $_GET['name'];
                        if($id!=null){
                            $sql = "select * from admin_table where adminID='$id' and permission='1'";

                            $res= mysqli_query($conn,$sql);
                            //  使用mysqli_query对于查询结果进行判别
                            // if (mysqli_num_rows($res))
                            $rows=$conn->query($sql);
                            // echo $rows;

                            if(mysqli_num_rows($res)<1) {
                                echo "<script>alert('We do not have a librarian with this ID');history.back();</script>";
                                exit;
                            }
                        }else if($name!=null ){
                            $sql = "select * from admin_table where adminName like '%$name%' and permission='1'";
                            $res= mysqli_query($conn,$sql);
                            //  使用mysqli_query对于查询结果进行判别
                            // if (mysqli_num_rows($res))
                            if(mysqli_num_rows($res)<1) {
                                echo "<script>alert('We do not have a librarian like this name');history.back();</script>";
                                exit;
                            }
                            $rows=$conn->query($sql);
                        }else {
                            echo "<script>alert('Please enter any one of the inputs');history.back();</script>";
                            exit;
                        }
                        foreach ($rows as $row) {
                            echo "<tr>";
                            echo "<th><input type='checkbox' name='test[]' value='$row[adminID]'/></th>";
                            echo "<th>{$row['adminID']} </th>";
                            echo "<th>{$row['adminName']}</th>";
                            echo "<th>{$row['password']} </th>";
                            echo "<th>{$row['adminEmail']} </th>";
                            echo "</tr>";
                        }
                } else{
                die('数据库连接失败' .mysqli_connect_error());
            }

            ?>

        </table>
    </form>
</div>
<div id="content2-3" style="height:42px;width:82%; float:left;">
    <table  align="center">
        <td>
            <button style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:120px; font-size:16px;" value="OK" align="center"
                    onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                    onmouseout="this.style.backgroundColor='';this.style.color='#000000';" onclick="dochange()">Edit</button>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button style="BACKGROUND-COLOR: rgba(255,255,255,0.2);border:1px;
                height:35px;width:120px; font-size:16px;" value="OK" align="center"
                    onmouseover="this.style.backgroundColor='#2894FF';this.style.color='#FFFFFF';"
                    onmouseout="this.style.backgroundColor='';this.style.color='#000000';" onclick="doDel()">Delete</button>
        </td>
    </table>
</div>
<div class="footer">
    CopyRight @2018 NPU.SPM-A2 All Rights Reserved
    &nbsp&nbsp&nbspBrowser Support:&nbspIE(9.0)&nbsp Chrome &nbspFireFox &nbsp360(7.0) &nbspSogou(6+) &nbspQQ
</div>

</body>
</html>
