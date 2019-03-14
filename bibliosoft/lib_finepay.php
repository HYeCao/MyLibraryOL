<!-- 检测是否交过押金 是否借阅超过三本书-->
<?php
date_default_timezone_set("PRC");
session_start();
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

$fineID=$_POST['test'];

//
    $sql2 = "SELECT * FROM fineinfor WHERE  fineID=$fineID ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
   // $endtime=$row2["endTime"];
    $finevalue=$row2["fineValue"];
    $isPaid=$row2["isPaid"];
    $time=time();
    $date = date('Ymd',$time);

//            echo $finevalue;
//            exit;
         if($isPaid=='1'){
             echo "<script language=javascript>alert('The fine is paid!!');location.href='lib_fine.php';</script>";
         }
         else {
             $sql1 = "update fineinfor set fineValue=0 , isPaid='1'  where fineID=$fineID";
             $res1 = mysqli_query($conn, $sql1);

             //  echo  $row2["readerName"];
             $insert = "insert into income_table(fineIncome,fineDate) values ('$finevalue','$date')";
             $res2 = mysqli_query($conn, $insert);


             echo "<script language=javascript>alert('Success!!');location.href='lib_fine.php';</script>";
//提示框后返回指定界面
             exit;
         }

?>