<?php
$id=$_POST['id'];
$name=$_POST['name'];
$Email=$_POST['Email'];
$Tel=$_POST['Tel'];
$fineID=$_POST['fineID'];



//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据
$sql="select * from borrowinfor WHERE readerName='$name'";
$res =mysqli_query($con,$sql);
$row=mysqli_num_rows($res);
if($row>0){
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('This reader has not returned the book.');</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_readerinfo.php'>";
        exit;
    }}

$sql1="select * from fineinfor WHERE fineID=$fineID and fineValue != 0";

$res1 =mysqli_query($con,$sql1);
$row1=mysqli_num_rows($res1);
if($row1>0){

    echo "<script> alert('This reader has not returned the fineValue.');</script>";
    echo "<meta http-equiv='Refresh' content='0;URL=lib_readerinfo.php'>";
}
else {
//删除指定数据

    mysqli_query($con,"UPDATE reader_table SET readerName='$name',readerEmail='$Email',readerTel='$Tel' WHERE readerID='$id'");

//排错并返回页面
    if (mysqli_error($con)) {
        echo mysqli_error($con);
    } else {
        mysqli_query($con,"DELETE FROM fineinfor WHERE fineID='$id'");
        echo "<script> alert('Edit successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_readerinfo.php'>";
    }
}
?>