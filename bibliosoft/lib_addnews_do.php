<?php
$title=$_POST['title'];
$content=$_POST['content'];

if(empty($title)){
    die('title is empty');
}
if(empty($content)){
    die('content is empty');
}


//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据
mysqli_query($con,"INSERT INTO news_table(News_title,News_content) VALUES ('$title','$content')");
//返回列表页面
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
    echo "<script> alert('Added successfully'); </script>";
    echo "<meta http-equiv='Refresh' content='0;URL=lib_index.php'>";
}
