<?php
$servername="localhost";
$username = "root";
$password = "root";
$database="bibliosoft";

// 创建连接
$conn = new mysqli($servername, $username, $password,$database);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['username'];
$mima=$_POST['password'];
$remima=$_POST['confirmPassword'];
$Email=$_POST['e-mail'];
$tel=$_POST['tel'];
//变量的定义



if ($mima != $remima) {
    header('refresh:3;url=reg.php');
    echo"THE WRONG PASSWORD!!";
    exit;
}



//确认密码不对应时异常报错
else {
    $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";

    if (!preg_match($pattern, $Email)) {

        header('refresh:3;url=reg.php');
        echo 'The Wrong E-mail Format!!';
        exit;

    }
    else {
            $sqls = "SELECT * FROM reader_table WHERE  readerName='$name' ";
            //  sql语句查询
            $res = mysqli_query($conn, $sqls);
            //  使用mysqli_query对于查询结果进行判别
            if (mysqli_num_rows($res)) {
                header('refresh:3;url=reg.php');
                echo "THE WRONG UserName!!";
                exit;
            } //用户名已存在时异常报错

            else {
                $sql = "INSERT into reader_table (readerName,readerPassword,readerEmail,readerTel) VALUES ('$name','$mima','$Email','$tel') ";
                if ($conn->query($sql) == TRUE) {
                    header('refresh:3;url=index.php');
                    echo "Success!!";
                    exit;
                } else {
//        echo mysqli_query($conn, $sql);
                    header('refresh:3;url=reg.php');
                    echo "DO IT AGAIN";
                    exit;
                }
//用户数据记录进数据库
            }
        }

}
?>