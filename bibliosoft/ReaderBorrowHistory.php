<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search book</title>
    <style>
        .bg{
            background: url("img/p2.jpg") ;
            background-size:cover;
        }
    </style>
</head>
<body class="bg">

<div id="content" style="height:600px;width:900px; float:left;">
    <p></p>
    <!--        <form >-->
    <table border="1" align="center">
        <tr>
            <td width="120px" height="40px" style="font-size:35px" >bookName</td>
            <td width="120px" height="40px" style="font-size:35px">startTime</td>
            <td width="120px" height="40px" style="font-size:35px">endTime</td>
            <td width="120px" height="40px" style="font-size:35px">readerName</td>
        </tr>

        <?php
        session_start();

        $name=$_SESSION['name'];//用户名

      //  $name="2016303265";//用户名

        $conn=mysqli_connect("localhost","root","root","bibliosoft");
        mysqli_set_charset($conn,"utf8");
        if($conn){

            if($name!=null){
                /*$sql="SELECT * FROM `borrowinfor` WHERE readerID in (\"select readerID from reader_table where `readerName`= '$name'\")";*/
                $sql="SELECT * FROM `borrowinfor`,`reader_table`,`bookinfor`where borrowinfor.readerName=reader_table.readerName and bookinfor.bookID=borrowinfor.bookID and reader_table.readerName='$name'";

            }else {
                echo "<script>alert('translate wrong');</script>";
                exit;
            }
//                            header('Location: Reader.php');
            $res= mysqli_query($conn,$sql);
            //  使用mysqli_query对于查询结果进行判别
            // if (mysqli_num_rows($res))
            $rows=$conn->query($sql);
            // echo $rows;

            // if(is_null($rows))
            if (mysqli_num_rows($res)<1){
            //    echo "<script>alert('you have not borrowed book yet');</script>";
                echo "<script language=javascript>alert('you have not borrowed book yet!!');location.href='ReaderHistory.php';</script>";
            }else {

//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                foreach ($rows as $row) {
//                                    echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                    echo "<tr>";

                    echo "<th>{$row['bookName']} </th>";
                    echo "<th>{$row['startTime']}</th>";
                    echo "<th>{$row['endTime']} </th>";
                    echo "<th>{$row['readerName']}</th>";
                    echo "</tr>";

                    //  echo  $n=$n+1;
                }
            }
        } else{
            die('数据库连接失败' .mysqli_connect_error());
        }
        ?>

    </table>
    <!--        </form>-->
</div>
<!--    <div>-->
<!--        <form action="submit_do.php?action=act" method="post">-->
<!--        <button style="float: bottom">sumbit</button>-->
<!--        </form>-->
<!---->
<!--            </div>-->

</body>
