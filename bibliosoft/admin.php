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
<div class="one" id="container2-1" style="width:200px;height:600px;float:left;background-color:rgba(255,255,255,0.6);">

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
    $conn=mysqli_connect("localhost","root","root","bibliosoft");
    mysqli_set_charset($conn,"utf8");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $currentpage = 1;
    if(isset($_GET['page']))
     $currentpage = $_GET['page'];
    $sql ="select count(*) as 'count' from admin_table where permission='1'";//查询记录的sql语句
    $result = mysqli_query($conn,$sql);
    $arr = mysqli_fetch_array($result);
    $count = $arr['count'];
    $pagesize = 10;
    $pages = ceil($count/$pagesize);//共多少页

    $prepage = $currentpage -1;
    if($prepage<=0)	  $prepage=1;
    $nextpage = $currentpage+1;
    if($nextpage >= $pages){
        $nextpage = $pages;
    }
    $start =($currentpage-1) * $pagesize;//起始位置
    $sql = "SELECT * from admin_table order by adminID desc limit $start,$pagesize";
//echo $sql;// $sql = "select * from student";
    $rows=$conn->query($sql);
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<th><input type='checkbox' name='test[]' value='$row[adminID]'/></th>";
        echo "<th>{$row['adminID']} </th>";
        echo "<th>{$row['adminName']}</th>";
        echo "<th>{$row['password']} </th>";
        echo "</tr>";
    }

?>

<a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$prepage; ?>">上一页</a>&nbsp;&nbsp;<a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$nextpage; ?>">下一页</a>
</body>
</html>
