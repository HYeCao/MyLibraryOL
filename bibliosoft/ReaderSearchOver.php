<?php
session_start();
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");
if($conn){
    switch ($_GET['act']){

        case 'seek':
            $readerName = $_POST['readerName'];
          //  echo ('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNotice:Please pay attention to the status and location of the borrowing');
            if($readerName!=null){
                $sql = "select * from reader_table where readerName='$readerName'";
            }else {
                echo "<script>alert('input can not be null');</script>";
                exit;
                break;
            }
//
            $res= mysqli_query($conn,$sql);
            //  使用mysqli_query对于查询结果进行判别
            // if (mysqli_num_rows($res))
            $rows=$conn->query($sql);
            // echo $rows;

            // if(is_null($rows))
            if (mysqli_num_rows($res)<1){
             //   echo "<script>alert('The ReaderName is wrong!!');</script>";
                echo "<script>alert('The ReaderName is wrong!!');history.back();</script>";
                break;
            }else {
                $_SESSION['readername']=$readerName;
               // echo $readerName;
                echo "<script language=javascript>alert('Success!!');location.href='SearchBooks.php';</script>";
                break;
                }
            }
    }
else{
    die('数据库连接失败' .mysqli_connect_error());
}
?>