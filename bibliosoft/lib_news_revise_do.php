<?php
$title=$_POST['title'];
$content=$_POST['content'];
$id=$_POST['id'];


//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据

    mysqli_query($con,"UPDATE news_table SET News_title='$title',News_content='$content' WHERE News_id='$id'");
//返回列表页面
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('Revised successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_news_list.php'>";
    }

