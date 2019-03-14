<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appoint book</title>
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
                        $sql = "select * from bookinfor where bookName like '%$bookName%' or author like '%$bookName%' or publisher like '%$bookName%' or ISBN = '$bookName'or bookID='$bookName'";

                    }else {
                        echo "<script>alert('input can not be null');</script>";
                        exit;
                        break;
                    }
//                            header('Location: Reader.php');
                    $res= mysqli_query($conn,$sql);
                    //  使用mysqli_query对于查询结果进行判别
                    // if (mysqli_num_rows($res))
                    $rows=$conn->query($sql);
                    // echo $rows;
                    //$sql10 = "SELECT * FROM bookinfor where bookID='$bookID' ";
                    $result2 = $conn->query($sql);
                    $row2 = $result2->fetch_assoc();
//                    $isBorrowed=$row2["isBorrowed"];
                    // if(is_null($rows))
                    if (mysqli_num_rows($res)<1){

                        echo "<script language=javascript>alert('we do not have this book!!');location.href='ReaderAppoint.php';</script>";
//提示框后返回指定界面
                        //        exit;
                        break;
                    }
//                    if($row2["isAppointed"]=='1')
//                    {
//                        echo "<script language=javascript>alert('The book is appointed!!');location.href='ReaderAppoint.php';</script>";
//                        break;
//                        exit;
//                    }
//                    if($row2["isBorrowed"]=='1')
//                    {
//                        echo "<script language=javascript>alert('The book is borrowed!!');location.href='ReaderAppoint.php';</script>";
//                        break;
//                        exit;
//                    }
                    else {


                        //                          echo "<button style=\"float: bottom\">sumbit</button>";
                        foreach ($rows as $row) {
                            if($row['isAppointed']=='-1' and $row['isBorrowed']=='-1' ) {
                                echo " <form action=\"ReaderAppointSubmit.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                                echo "<tr>";

                                echo "<th>{$row['bookName']} </th>";
                                echo "<th>{$row['bookLocation']}</th>";

                                // echo "<th>{$row['isAppointed']} </th>";
                                if ($row['isAppointed'] == 1) echo "<th>YES</th>";
                                else echo "<th>No</th>";
                                echo "<th>{$row['bookID']}</th>";
                                echo "<th><input type='checkbox' name='test[]' value={$row['bookID']}></th>";
                                echo "</tr>";
                            }
                            //  echo  $n=$n+1;
                        }
                        echo "<button style=\"float: bottom\">Appoint</button>";
                        echo "</form>";
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
