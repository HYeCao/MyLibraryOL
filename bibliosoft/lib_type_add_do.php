<?php
$type=$_POST['type'];




//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据
mysqli_query($con,"INSERT INTO book_category(type) VALUES ('$type')");
//返回列表页面
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
    echo "<script> alert('Added successfully'); </script>";
    echo "<meta http-equiv='Refresh' content='0;URL=lib_index.php'>";
}