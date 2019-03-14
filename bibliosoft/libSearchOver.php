<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search book</title>
    <style>
        .bg{
            background: url("img/p3.jpg") ;
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
            <td width="120px" height="40px" style="font-size:35px">bookLocation</td>
            <td width="120px" height="40px" style="font-size:35px">isAppointed</td>
            <td width="120px" height="40px" style="font-size:35px">bookID</td>
            <td width="120px" height="40px" style="font-size:35px">isBorrowed</td>
        </tr>

        <?php
        $conn=mysqli_connect("localhost","root","root","bibliosoft");
        mysqli_set_charset($conn,"utf8");
        if($conn){
            switch ($_GET['act']){

                case 'seek':
                    $bookName = $_POST['bookName'];
                    echo ('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNotice:Please pay attention to the status and location of the borrowing');
                    if($bookName!=null){
                        $sql = "select * from bookinfor where bookName like '%$bookName%'";
                    }else {
                        echo "<script>alert('input can not be null');</script>";
                        exit;
                        break;
                    }
                    $res= mysqli_query($conn,$sql);
                    //  使用mysqli_query对于查询结果进行判别
                    // if (mysqli_num_rows($res))
                    $rows=$conn->query($sql);
                    // echo $rows;

                    // if(is_null($rows))
                    if (mysqli_num_rows($res)<1){
                        echo "<script>alert('we do not have this book');</script>";
                        break;
                    }else {

                        foreach ($rows as $row) {
//                                    echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                            echo "<tr>";

                            echo "<th>{$row['bookName']} </th>";
                            echo "<th>{$row['bookLocation']}</th>";
                            echo "<th>{$row['isAppointed']} </th>";
                            echo "<th>{$row['bookID']}</th>";
                            echo "<th>{$row['isBorrowed']}</th>";
                            echo "</tr>";

                            //  echo  $n=$n+1;
                        }

                    }
            }
        }else{
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
