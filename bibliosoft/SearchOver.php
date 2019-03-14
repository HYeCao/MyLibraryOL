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
                </tr>

                <?php
                session_start();
                $conn=mysqli_connect("localhost","root","root","bibliosoft");
                mysqli_set_charset($conn,"utf8");
                if($conn) {
                    switch ($_GET['act']) {

                        case 'seek':
                            $readerID = $_POST['readerID'];
                            $_SESSION['readerID']=$readerID;
                            $bookID = $_POST['bookID'];

                            $sql10 = "SELECT * FROM bookinfor where bookID='$bookID' ";
                            $result2 = $conn->query($sql10);
                            $row2 = $result2->fetch_assoc();
                            $isBorrowed=$row2["isBorrowed"];


                            echo('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNotice:Please pay attention to the status and location of the borrowing');
                            $sql1 = "select * from reader_Table where readerID='$readerID'";
                            $res1 = mysqli_query($conn, $sql1);
                            //  使用mysqli_query对于查询结果进行判别
                            // if (mysqli_num_rows($res))
                            $row = $conn->query($sql1);
                            $row2 = $res1->fetch_assoc();
                            if (mysqli_num_rows($res1) < 1) {
                                echo "<script language=javascript>alert('ReaderID is wrong!!');location.href='ReaderBorrow.php';</script>";
                            } else {
                                if($isBorrowed=='1'){
                                    echo "<script language=javascript>alert('The book has been borrowed!!');location.href='ReaderBorrow.php';</script>";
                                }
                                $_SESSION['readername']=$row2["readerName"];
                               $readername=$row2["readerName"];
                                $sql = "select * from bookinfor where bookID='$bookID'";
                                $res = mysqli_query($conn, $sql);
                                //  使用mysqli_query对于查询结果进行判别
                                // if (mysqli_num_rows($res))
                                $rows = $conn->query($sql);
                                if (mysqli_num_rows($res) < 1) {
                                    echo "<script language=javascript>alert('BookID is wrong!!');location.href='ReaderBorrow.php';</script>";
                                } else {
//                                    echo $readername;
                                    $sql3 = "select * from borrowinfor where readerName='$readername'";
                                    $query=mysqli_query($conn,$sql3);
                                    $rows1=mysqli_num_rows($query);

//                                   echo $rows1;
//                                   exit;
////
                                    if ($rows1 < 3) {
                                        //                          echo "<button style=\"float: bottom\">sumbit</button>";
                                        foreach ($rows as $row) {
                                            echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                                            echo "<tr>";

                                            echo "<th>{$row['bookName']} </th>";
                                            echo "<th>{$row['bookLocation']}</th>";
                                            echo "<th>{$row['isAppointed']} </th>";
                                            echo "<th>{$row['bookID']}</th>";
                                            echo "<th><input type='checkbox' name='test[]' value={$row['bookID']}></th>";
                                            echo "</tr>";

                                            //  echo  $n=$n+1;
                                        }
                                        echo "<button style=\"float: bottom\">Borrow</button>";
                                        echo "</form>";
                                    }
                                    else {
                                        $_SESSION['readerID']=null;
                                        echo "<script language=javascript>alert('Can not borrow more than 3 books!!');location.href='ReaderBorrow.php';</script>";
                                    }
                                    }

                            }
                    }
                }
                else{
                        die('数据库连接失败' . mysqli_connect_error());
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
</html>
