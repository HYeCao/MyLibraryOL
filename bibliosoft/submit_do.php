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

if($_SESSION["appointTime"]!=null && $_SESSION["appointReader"]!=null)
{
    $appoint = $_SESSION["appointTime"];
    $appointName = $_SESSION["appointReader"];
}
$text1=$_POST['test'];

$n=count($text1);
$sql = "SELECT * FROM reader_table WHERE  readerName='$name' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$deposit=$row["readerDeposit"];
$fineID=$row["fineID"];


 $time=time();
$date = date('Ymd',$time);

//$enddate=date('Y-m-d',strtotime("+30 day"));
$sql10 = "SELECT * FROM admindata ";
$result2 = $conn->query($sql10);
$row2 = $result2->fetch_assoc();
$period=$row2["period"];

$enddate=date('Ymd', strtotime("+$period day"));

//if($deposit==1) {
    if ($n > 3) {
      //  echo "<script>alert('No more than 3 books can be borrowed');</script>";
        echo "<script language=javascript>alert('No more than 3 books can be borrowed!!');location.href='ReaderBorrow.php';</script>";
    } else {
        $m = 0;
  //      echo $text1[$m];
//        echo $name;
       for ($m; $m < $n; $m++) {
           $sql10 = "SELECT * FROM bookinfor where bookID='$text1[$m]'";
           $result2 = $conn->query($sql10);
           $row2 = $result2->fetch_assoc();
           $isAppointed=$row2["isAppointed"];
           if($isAppointed=='1') {
               $hour = floor((strtotime($date) - strtotime($appoint)) / 86400 / 3600);
               //两个小时的时间检测
//               echo $hour;
//               exit;
               if ($hour > 2) {
//


                   $sql = "update bookinfor set isBorrowed='1' ,isAppointed='-1'  where bookID='$text1[$m]'";
//            $sql1 = "insert into borrowinfor(bookID,readerID,isBack) values ($text1[$m],$name,'-1')";

                   $sql1 = "insert into borrowinfor(bookID,readerName,isBack,startTime,endTime,fineID) values ('$text1[$m]','$name','-1','$date','$enddate','$fineID')";

                   $res = mysqli_query($conn, $sql);
                   $res1 = mysqli_query($conn, $sql1);
                   //echo "<script>alert('Success!!');</script>";


               echo "<script language=javascript>alert('Success!!');location.href='ReaderBorrow.php';</script>";
//提示框后返回指定界面
               exit;
               }

           else {
//             echo "<script language=javascript>alert('The book is appointed!!');location.href='ReaderBorrow.php';</script>";
                   if ($name != $appointName) {
                       echo "<script language=javascript>alert('The book is appointed!!');location.href='ReaderBorrow.php';</script>";
                       exit;
                   }
               $sql = "update bookinfor set isBorrowed='1' ,isAppointed='-1'  where bookID='$text1[$m]'";
//            $sql1 = "insert into borrowinfor(bookID,readerID,isBack) values ($text1[$m],$name,'-1')";

               $sql1 = "insert into borrowinfor(bookID,readerName,isBack,startTime,endTime,fineID) values ('$text1[$m]','$name','-1','$date','$enddate','$fineID')";

               $res = mysqli_query($conn, $sql);
               $res1 = mysqli_query($conn, $sql1);
               //echo "<script>alert('Success!!');</script>";


               echo "<script language=javascript>alert('Success!!');location.href='ReaderBorrow.php';</script>";
//提示框后返回指定界面
               exit;
               }
               }

               //没有预约：
           $sql = "update bookinfor set isBorrowed='1' ,isAppointed='-1'  where bookID='$text1[$m]'";
//            $sql1 = "insert into borrowinfor(bookID,readerID,isBack) values ($text1[$m],$name,'-1')";

           $sql1 = "insert into borrowinfor(bookID,readerName,isBack,startTime,endTime,fineID) values ('$text1[$m]','$name','-1','$date','$enddate','$fineID')";

           $res = mysqli_query($conn, $sql);
           $res1 = mysqli_query($conn, $sql1);
           //echo "<script>alert('Success!!');</script>";


           echo "<script language=javascript>alert('Success!!');location.href='ReaderBorrow.php';</script>";
//提示框后返回指定界面
           exit;

}
    }
//else {
//    echo "<script>alert('Please pay the deposit first!!');</script>";
//}

?>