<?php
$location1=$_POST['location1'];
$location2=$_POST['location2'];
$location3=$_POST['location3'];
$id=$_POST['id'];


//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据

mysqli_query($con,"UPDATE book_location SET location1='$location1',location2='$location2',location3='$location3' WHERE id='$id'");
//返回列表页面
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
    echo "<script> alert('Revised successfully'); </script>";
    echo "<meta http-equiv='Refresh' content='0;URL=lib_location.php'>";
}

