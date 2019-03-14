<?php
//排空错误
if(empty($_GET['id'])){
    die('id is empty');
}
//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
$id=$_GET['id'];
$sql="select * from borrowinfor WHERE bookID='$id'";
$sqli="select isLost from bookinfor where bookID='$id'";
$resi=mysqli_query($con,$sqli);
$resii=mysqli_fetch_array($resi);
$islost=$resii['isLost'];
$res =mysqli_query($con,$sql);
$row=mysqli_num_rows($res);
if($row>0&&$islost==-1){
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('This book has been loaned and cannot be deleted.');</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
    }
}
else{
    mysqli_query($con,"DELETE FROM bookinfor WHERE bookID='$id'");
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('Delete successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
    }
}
//删除指定数据
?>
