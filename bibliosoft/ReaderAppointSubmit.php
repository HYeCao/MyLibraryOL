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
$name=$_SESSION['name'];

$text1=$_POST['test'];

date_default_timezone_set('PRC');
//时间转换为中国区时间
$dat=date('Y-m-j');
//获取现在时间
//$s=abs(strtotime($dat1) - strtotime($dat))/60/60;
//将设置的时间与当前时间相减并精确至小时

$n=count($text1);
$sql = "SELECT * FROM reader_table WHERE  readerName='$name' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$deposit=$row["readerDeposit"];
$fineID=$row["fineID"];

if($n==0){
    echo "<script language=javascript>alert('Fail!!');location.href='ReaderAppoint.php';</script>";
}
$time=time();
$date = date('Ymd',$time);
//$enddate=date('Y-m-d',strtotime("+30 day"));

$enddate=date('Ymd', strtotime("+30 day"));

    if ($n > 3) {
        //  echo "<script>alert('No more than 3 books can be borrowed');</script>";
        echo "<script language=javascript>alert('No more than 3 books can be appointed!!');location.href='ReaderAppoint.php';</script>";
    } else {
        $m = 0;
        //      echo $text1[$m];
        //        echo $name;
        for ($m; $m < $n; $m++) {
            $sql = "update bookinfor set isAppointed='1' where bookID=$text1[$m]";
//            $sql1 = "insert into borrowinfor(bookID,readerID,isBack) values ($text1[$m],$name,'-1')";
            $res = mysqli_query($conn, $sql);
//            $sql1 = "insert into borrowinfor(bookID,readerName,isBack,startTime,endTime,fineID) values ($text1[$m],$name,'-1',$date,$enddate,$fineID)";
//            $res1 = mysqli_query($conn, $sql1);
            //echo "<script>alert('Success!!');</script>";
        }
        $_SESSION["appointTime"]=$date;
        $_SESSION["appointReader"]=$name;
//        echo $_SESSION["addpointTime"];
//        echo $_SESSION["appointReader"];
        echo "<script language=javascript>alert('Success!!');location.href='ReaderAppoint.php';</script>";
//提示框后返回指定界面
        exit;
    }


?>