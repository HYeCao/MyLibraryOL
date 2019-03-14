<?php
session_start();
$name=$_SESSION['name'];
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");

$pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";



if($conn){

    switch ($_GET['action']){
        case 'email':
            $id = $_GET['id'];
            $email = $_GET['email'];
            if (!preg_match($pattern, $email)) {
                echo "<script language=javascript>alert('The Wrong E-mail Format!!');history.back();</script>";
                break;
            }


            if($id!=$name){
                echo "<script language=javascript>alert('The Wrong Name!!');history.back();</script>";
                break;
            }

            $sql = "update reader_table set readerEmail='$email'  where readerName='$id';";
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