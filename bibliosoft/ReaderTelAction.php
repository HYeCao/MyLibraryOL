<?php
session_start();
$name=$_SESSION['name'];
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");
if($conn){

    switch ($_GET['action']){
        case 'tel':
            $id = $_GET['id'];
            $tel = $_GET['Tel'];
            $sql = "update reader_table set readerTel='$tel'  where readerName='$id';";
            if($id!=$name){
                echo "<script language=javascript>alert('The Wrong Name!!');history.back();</script>";
                break;
            }
            else if(strlen($tel)!=11){
                echo "<script language=javascript>alert('The Wrong PhoneNum!!');history.back();</script>";
                break;
            }
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                //  header('refresh:3;url=adminlogin.php');
                header('refresh:3;url=ReaderAlter.php');
                echo "Success!!";
                exit;
                break;
            }else {
                echo "<script language=javascript>alert('Fail!!');history.back();</script>";
                break;
            }
            header('Location: ReaderAlter.php');
            break;
        default:
            header('Location: ReaderAlter.php');
            break;
    }
//    header('Location: adminlogin.php');

}else{
    die('数据库连接失败' .mysqli_connect_error());
}

?>