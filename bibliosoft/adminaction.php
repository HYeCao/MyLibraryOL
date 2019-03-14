<?php
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");
if($conn){

    switch ($_GET['action']){

        case 'password':
            $id = $_GET['id'];
            $password1 = $_GET['pw'];
            $opw = $_GET['opw'];
            $sql = "update admin_table set password='$password1'  where adminName='$id' and permission='-1' and password='$opw';";
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                echo "<script language=javascript>alert('Success!!');window.location.href='adminlogin.php';</script>";
                break;
            }else {
                echo "<script language=javascript>alert('Fail!!');history.back();</script>";
                break;
            }
            header('Location: adminindex.php');
            break;

//        case 'change':
//            $id = $_POST['id'];
//            $name = $_POST['name'];
//            $password = $_POST['password'];
////            $sql = "select * from admin_table where adminName ='$name'";
////            $rw = mysqli_query($conn,$sql);
////            if(mysqli_num_rows($rw) >0) {
////                echo "<script  language=javascript>alert('The name already exists！');history.back();</script>";
////                break;
////            }
//            $sql = "update admin_table set adminName='$name',password='$password'  where adminID='$id' and permission='1';";
//            $rw = mysqli_query($conn,$sql);
//            if ($rw > 0){
//                echo "<script>alert('Update successfully!');history.back();</script>";
//                break;
//            }else{
//                echo "<script>alert('Update failed!');history.back();</script>";
//                break;
//            }
//            header('Location: countindex.php');
//            break;

        case 'change':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";

            if (!preg_match($pattern, $email)) {
                echo "<script  language=javascript>alert('The wrong Email format!!');history.back();</script>";
                break;
            }
                if ($password==''){
                $password="00010001";
            }
            if($name==''){
                echo "<script  language=javascript>alert('Please input librarian name.');history.back();</script>";
                break;
            }
            $sql = "select * from admin_table where adminID='$id' and adminName ='$name'and password ='$password'and adminEmail='$email'";
            $rw = mysqli_query($conn,$sql);
            if(mysqli_num_rows($rw) >0) {
                echo "<script  language=javascript>alert('No change');history.back();</script>";
                break;
            }//no change
            $sql = "select * from admin_table where adminName ='$name'and password ='$password'and adminEmail='$email'";
            $rw = mysqli_query($conn,$sql);
            if(mysqli_num_rows($rw)>0) {
                echo "<script  language=javascript>alert('The name already exists！');history.back();</script>";
                break;
            }//no change
            $sql = "select * from admin_table where adminID !='$id'and adminName ='$name'";
            $rw = mysqli_query($conn,$sql);
            if(mysqli_num_rows($rw) >0) {
                echo "<script  language=javascript>alert('The database has this name！');history.back();</script>";
                break;
            }//no change
//            $sql_select = "select * from admin_table where adminID ='$id'and password !='$password'";
//            $rws = mysqli_query($conn, $sql_select);
//            if (mysqli_num_rows($rws)==0) {
//                echo "<script  language=javascript>alert('The database has this name333！');history.back();</script>";
//                break;
//            }
            $sql = "update admin_table set adminName='$name',password='$password',adminEmail='$email'  where adminID='$id' and permission='1';";
            $rw = mysqli_query($conn,$sql);
            if ($rw > 0){
                echo "<script>alert('Update successfully!');history.back();</script>";
                break;
            }else{
                echo "<script>alert('Update failed!');history.back();</script>";
                break;
            }
            header('Location: countindex.php');
            break;

        case 'add'://添加图书管理员 Add librarian
            $adminName = $_POST['adminName'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";

            if (!preg_match($pattern, $email)) {
                echo "<script  language=javascript>alert('The wrong Email format!!');history.back();</script>";
                break;
            }
            if ($password==''){
                $password="00010001";
            }
            $sql = "select * from admin_table where adminName ='$adminName'";
            $rw = mysqli_query($conn,$sql);
            if(mysqli_num_rows($rw) >0) {
                echo "<script  language=javascript>alert('The name already exists！');history.back();</script>";
                break;
            }
            $sql = "insert into admin_table (adminName,password,permission,adminEmail)
           values ( '$adminName','$password','1','$email')";
//            echo $sql;
            $rw = mysqli_query($conn,$sql);
            if ($rw > 0){  //pan
                echo "<script  language=javascript>alert('Added successfully!');history.back();</script>";
                break;
            }else{
                echo "<script  language=javascript>alert('Add failed!');history.back();</script>";
                break;
            }
            header('Location: adminindex.php');
            break;

        case 'del'://get
            $id = array();
            $id = $_GET['id'];
            $idji=$id[0];
            $pieces = explode(",", $idji);
            foreach($pieces as $val){
                $sql = "delete from admin_table where adminID='$val'and permission='1'";
                $rw = mysqli_query($conn,$sql);
            }
            $rw = mysqli_query($conn,$sql);
            if ($rw > 0){
                echo "<script>alert('Delete successfully!');window.location.href='adminindex.php';</script>";
                break;
            }else {
                echo "<script>alert('Delete failed!');window.location.href='adminindex.php';</script>";
                break;
            }
            header('Location: adminindex.php');
            break;

        case 'setFine':
            $fine = $_GET['fine'];
            $sql = "update admindata set fine='$fine'  where dateID='1'";
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                echo "<script language=javascript>alert('Success!!');history.back();</script>";
                break;
            }else {
                echo "<script language=javascript>alert('Fail!!');history.back();</script>";
                break;
            }
            header('Location: adminindex.php');
            break;

        case 'setDeposit':
            $deposit = $_GET['deposit'];
            $sql = "update admindata set deposit='$deposit'  where dateID='1'";
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                echo "<script language=javascript>alert('Success!!');history.back();</script>";
                break;
            }else {
                echo "<script language=javascript>alert('Fail!!');history.back();</script>";
                break;
            }
            header('Location: adminindex.php');
            break;

        case 'setReturnTime'://更改图书借阅周期  Change book return period
            $returnPeriod = $_GET['returnPeriod'];
            $sql = "update admindata set period='$returnPeriod'  where dateID='1'";
            $rw = mysqli_query($conn,$sql);
            if (mysqli_affected_rows($conn)){
                echo "<script language=javascript>alert('Success!!');history.back();</script>";
                break;
            }else {
                echo "<script language=javascript>alert('Fail!!');history.back();</script>";
                break;
            }
            header('Location: adminindex.php');
            break;


        default:
            header('Location: adminindex.php');
            break;




    }
//    header('Location: adminlogin.php');




}else{
    die('数据库连接失败' .mysqli_connect_error());
}

?>