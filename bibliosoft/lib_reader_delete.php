<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DeleteReaders</title>
</head>
<body>
<?php
//排空错误
if(empty($_GET['id'])){
    die('id is empty');
}
if(empty($_GET['name'])){
    die('name is empty');
}

//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");

$id=$_GET['id'];
$name=$_GET['name'];

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

$sql1="select * from fineinfor WHERE fineID=$id and fineValue != '0'";

$res1 =mysqli_query($con,$sql1);
$row1=mysqli_num_rows($res1);
if($row1>0){

        echo "<script> alert('This reader has not returned the fineValue.');</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_readerinfo.php'>";
    }
else {
//删除指定数据

    mysqli_query($con,"DELETE FROM reader_table WHERE readerName='$name'");

//排错并返回页面
    if (mysqli_error($con)) {
        echo mysqli_error($con);
    } else {
        mysqli_query($con,"DELETE FROM fineinfor WHERE fineID='$id'");
        echo "<script> alert('Delete successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_readerinfo.php'>";
    }
}
?>
</body>
</html>