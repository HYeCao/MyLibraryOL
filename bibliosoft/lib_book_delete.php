<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DeleteBooks</title>
</head>
<body>
	<?php
//排空错误
if(empty($_GET['id'])){
    die('id is empty');
}
//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");

$id=intval($_GET['id']);

//删除指定数据
mysqli_query($con,"DELETE FROM bookinfor WHERE bookID=$id");
//排错并返回页面
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
	echo "<script> alert('Delete successfully'); </script>"; 
    echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
}
?>
</body>
</html>