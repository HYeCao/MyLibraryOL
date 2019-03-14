<?php
//排空错误
if(empty($_GET['id'])){
    die('id is empty');
}
//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
$id=intval($_GET['id']);
$sql="select * from news_table WHERE News_id=$id";
$res =mysqli_query($con,$sql);
$row=mysqli_num_rows($res);
//if($row>0){
//    if(mysqli_error($con)){
//        echo mysqli_error($con);
//    }else{
//        echo "<script> alert('This book has been loaned and cannot be deleted.');</script>";
//        echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
//    }
//}

    mysqli_query($con,"DELETE FROM news_table WHERE News_id=$id");
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('Delete successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_news_list.php'>";
    }

//删除指定数据
?>
