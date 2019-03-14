<?php
date_default_timezone_set("PRC");
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
$time=time();
//$time=time();
$date = date('Ymd',$time);

$name=$_POST['username'];
$mima=$_POST['password'];
$remima=$_POST['confirmPassword'];
$Email=$_POST['e-mail'];
$tel=$_POST['tel'];
$sql= "SELECT  max(fineID) FROM fineinfor ";
$re=mysqli_query($conn,$sql);
$row = mysqli_fetch_row($re);
$fineID=($row[0])+1;

$sql3= "SELECT  max(readerID) FROM reader_table ";
$re3=mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_row($re3);
$readerID=($row3[0])+1;
//echo $readerID;
//exit;
//变量的定义


if ($mima != $remima) {
    header('refresh:3;url=lib_reg.php');
    echo"THE WRONG PASSWORD!!";
    exit;
}

else if(strlen($tel)!=11)
{
    header('refresh:3;url=lib_reg.php');
    echo"The Wrong phone number format" ;
}

//确认密码不对应时异常报错
else {
    $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";

    if (!preg_match($pattern, $Email)) {

        header('refresh:3;url=lib_reg.php');
        echo 'The Wrong E-mail Format!!';
        exit;

    }
    else {
            $sqls = "SELECT * FROM reader_table WHERE  readerName='$name' ";
            //  sql语句查询
            $res = mysqli_query($conn, $sqls);
            //  使用mysqli_query对于查询结果进行判别
            if (mysqli_num_rows($res)) {
                header('refresh:3;url=lib_reg.php');
                echo "THE WRONG UserName!!";
                exit;
            } //用户名已存在时异常报错
            else {
                if($mima==null){
                    $sql1 = "INSERT into reader_table (readerID,readerName,readerPassword,readerEmail,readerTel,fineID,settime) VALUES ('$readerID','$name','12345678','$Email','$tel','$fineID','$date') ";

                }
                else {
                    $sql1 = "INSERT into reader_table (readerID,readerName,readerPassword,readerEmail,readerTel,fineID,settime) VALUES ('$readerID','$name','$mima','$Email','$tel','$fineID','$date') ";
                }
                $sql2 ="INSERT into fineinfor (fineID,fineValue) VALUES ('$fineID',0) ";

                $conn->query($sql2);
//                $conn->query($sql1);
                if ($conn->query($sql1) == TRUE) {
                    $sql2 = "SELECT * FROM admindata ";
                    $result2 = $conn->query($sql2);
                    $row2 = $result2->fetch_assoc();
                    $deposit=$row2["deposit"];
//                    echo $deposit;
//                    exit;
                    $insert = "insert into income_table(regIncome,regDate) values ('$deposit','$date')";
                    $res2 = mysqli_query($conn, $insert);

                    echo "<script>alert('Success!');</script>";
                    echo "<meta http-equiv='Refresh' content='1;URL=readbarcodess.php?text=$readerID'>";
                    exit;
                } else {
//        echo mysqli_query($conn, $sql);
                    header('refresh:3;url=lib_reg.php');
                    echo "DO IT AGAIN";
                    exit;

                }
//用户数据记录进数据库
            }
        }

}
?>