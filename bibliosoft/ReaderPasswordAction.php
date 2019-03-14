<?php
session_start();
$name=$_SESSION['name'];
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");
if($conn){
    switch ($_GET['action']){
        case 'password':
            $id = $_GET['id'];
            $password1 = $_GET['password'];
            if($id!=$name){
                echo "<script language=javascript>alert('The Wrong Name!!');history.back();</script>";
                break;
            }
            $sql = "update reader_table set readerPassword='$password1'  where readerName='$id';";
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                header('refresh:3;url=ReaderAlter.php');
                echo "Success!!";
//                echo "<script language=javascript>alert('Success!!');location.href='SearchBooks.php';</script>";
                exit;
                break;
            }else {
                   echo "<script language=javascript>alert('The Password is Wrong!!');history.back();</script>";
                break;
            }
            header('Location: ReaderAlter.php');
            break;
        default:
            header('Location: ReaderAlter.php');
            break;
    }

//header('refresh:3;url=index.php');
//echo "Success!!";
}

else{
    die('数据库连接失败' .mysqli_connect_error());
}

?>