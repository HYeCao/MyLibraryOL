<?php
session_start();
$servername="localhost";
$username = "root";
$password = "root";
$database="bibliosoft";

// 创建连接
$conn = new mysqli($servername, $username, $password,$database);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_SESSION['name'];
$sql="UPDATE reader_table SET readerDeposit ='1' WHERE readerName= '$name'";
if ($conn->query($sql)==TRUE) {
    echo "<script>alert('Please wait for review!!');</script>";

   // header('Location:PayDeposit.php');
}
else {
    echo "<script>alert('Do it again');</script>";
  //  header('Location:PayDeposit.php');
}



?>