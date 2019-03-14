<?php
session_start();
$name=$_SESSION['name'];
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","bibliosoft");
mysqli_set_charset($conn,"utf8");

$sql1="select * from reader_table where readerName='$name'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$id=$row1["fineID"];
$sql = "SELECT * FROM fineinfor where fineID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // 输出每行数据
//    while($row = $result->fetch_assoc()) {
//        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
//    }
} else {
    echo "0 results";
}
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        body{
            background-image:url("img/bg.jpg");
            background-size:cover;

        }
        .box
        {
            height:500px;
            width:1500px;
        }
        .wrap{
            background-color: #FFFFFF;
            margin:90px  auto;
            width: 300px;
            height:300px;
            font-family: 微软雅黑;
            text-align: center;
            float:left;
        }
        .content
        {
            font-family: 微软雅黑;
            text-align: left;
            padding:3px;

        }
        .title
        {
            font-family: 微软雅黑;
            text-align: left;
            color: #c5964f;

        }
        .picture{
            margin:90px  auto;
            width: 280px;
            height:300px;
            float:left;
        }
    </style>
</head>
<body>
<div class="box">
  <div><img src="img/fine.png" class="picture"><div>

            <div class="wrap" >
                <p class="title"><strong>&nbsp&nbspFINE INFORMATION:<strong></p>
                <hr>
                <p class="content">&nbspFineID : <?php echo $row['fineID']; ?></p><br>
                <p class="content">&nbspFineValue :<?php echo $row['fineValue'] ?></p><br>
<!--                echo"<th><button style=\"float: right\" name='test[]' value={$row['bookID']}>Return</button></th>";-->
            </div>

            <div>

</html>