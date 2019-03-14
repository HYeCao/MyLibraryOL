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
$name=$_SESSION['readername'];
//echo $name;
//exit;
$text1=$_POST['test'];
$n=count($text1);
$sql = "SELECT * FROM reader_table WHERE  readerName='$name' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$fineID=$row["fineID"];
$readerID=$row["readerID"];

        $m = 0;
        for ($m; $m < $n; $m++) {
//
            $sql2 = "SELECT * FROM borrowinfor WHERE  bookID='$text1[$m]' ";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
            $endtime=$row2["endTime"];

            $time=time();
            $date = date('Ymd',$time);
            $laydays=ceil(($date-$endtime));
            $finevalue=$laydays;
//            echo $finevalue;
//            exit;
            if($finevalue>0) {
                $sql1 = "update fineinfor set fineValue=fineValue+$finevalue where fineID=$fineID";
                $res1 = mysqli_query($conn, $sql1);
            }
            $borrowID=$row2["borrowID"];
//            echo $text1[$m];
//            echo $date;
//            echo $fineID;
//            echo $name;
//            echo $row2["borrowID"];
            $sql = "update bookinfor set isBorrowed='-1' where bookID=$text1[$m]";
            $res = mysqli_query($conn, $sql);
          //  echo  $row2["readerName"];
            $insert = "insert into returninfor(readerID,borrowID,bookID,returnTime,fineID) values ('$readerID','$borrowID','$text1[$m]','$date','$fineID')";
            $res2= mysqli_query($conn, $insert);
           $sql1 = "update borrowinfor set isBack=1 where bookID='$text1[$m]'";
           $res1 = mysqli_query($conn, $sql1);

        }

        echo "<script language=javascript>alert('Success!!');location.href='lib_index.php';</script>";
//提示框后返回指定界面
        exit;


?>