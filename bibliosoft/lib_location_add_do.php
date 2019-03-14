<?php
$location1=$_POST['location1'];
$location2=$_POST['location2'];
$location3=$_POST['location3'];



//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据
mysqli_query($con,"INSERT INTO book_location(location1,location2,location3) VALUES ('$location1','$location2','$location3')");
//返回列表页面
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
    echo "<script> alert('Added successfully'); </script>";
    echo "<meta http-equiv='Refresh' content='0;URL=lib_index.php'>";
}