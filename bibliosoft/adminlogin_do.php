<?php
$servername="localhost";
$username = "root";
$password = "root";
$database="bibliosoft";
session_start();
// 创建连接
$conn = new mysqli($servername, $username, $password,$database);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$act=$_GET['act'];

switch ($act)
    /*
     * 利用switch语句实现数据库搜索以及登录中用户名及密码的判别
    */
{

    case 'login':
        $name = $_POST['username'];
        //用户名变量定义
        $mima = $_POST['password'];
        // 密码变量定义
        $sql = "SELECT * FROM admin_table WHERE  adminName='$name' and password='$mima'";
        //  sql语句查询
        $res= mysqli_query($conn,$sql);
        //  使用mysqli_query对于查询结果进行判别
        if (mysqli_num_rows($res)) {
            $row=$res->fetch_assoc();

            if($row["permission"]>0) {
                $_SESSION['readerID']=null;
//                header('Location: https://www.w3cschool.cn/php/php-mysql-select.html');
                header('Location: lib_Librarian.php');
//              1：  图书管理员
            }
            if($row["permission"]<0) {
                header('Location: adminindex.php');
//              -1： 系统管理员
            }
            //用户名及密码正确情况
            //处理： 用户名及密码正确跳转至下一页面
            //此处跳转的页面需重现设置
        } else {
            header('refresh:3;url=adminlogin.php');
            echo"Username or password is wrong";
            exit;
            //用户名或密码错误情况
            //处理：显示错误信息提示“Username or password is wrong”并在3秒后重新跳转至登录界面
        }

}
?>