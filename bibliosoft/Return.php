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
            <td width="120px" height="40px" style="font-size:35px" >readerName</td>
            <td width="120px" height="40px" style="font-size:35px" >bookID</td>
            <td width="120px" height="40px" style="font-size:35px">startTime</td>
            <td width="120px" height="40px" style="font-size:35px">endTime</td>
            <td width="120px" height="40px" style="font-size:35px">debtDay</td>

        </tr>

        <?php
        date_default_timezone_set("PRC");
        session_start();

     //   $name=$_SESSION['readername'];//用户名

        $conn=mysqli_connect("localhost","root","root","bibliosoft");
        mysqli_set_charset($conn,"utf8");
        if($conn){
              switch ($_GET['act']) {

                        case 'seek':
                            $bookID=$_POST['bookID'];
                            $sql="select * from borrowinfor where bookID='$bookID'";
                            $res = mysqli_query($conn, $sql);
                            //  使用mysqli_query对于查询结果进行判别
                            // if (mysqli_num_rows($res))
                            $row = $conn->query($sql);
                            if (mysqli_num_rows($res) < 1) {
                                echo "<script language=javascript>alert('BookID is wrong!!');location.href='ReturnReaderSearch.php';</script>";
                            }
                            else {
                                echo " <form action=\"Return_do.php?action=act\" method=\"post\">";

                                foreach ($row as $row) {
//                                    echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                                    echo "<tr>";
                                    echo "<th>{$row['readerName']} </th>";
                                    echo "<th>{$row['bookID']} </th>";
                                    echo "<th>{$row['startTime']}</th>";
                                    echo "<th>{$row['endTime']} </th>";

                                    $endtime=$row["endTime"];
                                    $time=time();
                                    $date = date('Ymd',$time);
                                    $laydays=ceil(($date-$endtime));
                                    $finevalue=$laydays;
                                    $sql2 = "SELECT * FROM admindata ";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();
                                    $fine=$row2["fine"];
                                    $finevalue=$laydays*$fine;
//                                    echo $finevalue;
//                                    exit;
                                    if($finevalue>0){
                                        $sqls = "update borrowinfor set debtDays=$laydays where bookID=$bookID";
                                        $res1 = mysqli_query($conn, $sqls);
                                    echo "<th>{$laydays}</th>";
                                    }
                                    else {
                                        echo "<th>{$row['debtDays']}</th>";
                                    }
                                    echo"<th><button style=\"float: right\" name='test[]' value={$row['bookID']}>Return</button></th>";
                                    echo "</form>";
                                    echo "</tr>";
                                    $_SESSION['readername']=$row["readerName"];
                                    //  echo  $n=$n+1;
                                }
//                                echo "<button style=\"float: right\">Return</button>";

                            }

//                                    echo "<button style=\"float: bottom\">sumbit</button>";


            }
        }else{
            die('数据库连接失败' .mysqli_connect_error());
        }
        ?>

    </table>
    <!--        </form>-->
</div>


</body>
