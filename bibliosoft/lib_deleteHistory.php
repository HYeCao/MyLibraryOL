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
    <table border="1" align="center"cellspacing="0">
        <tr>
            <td width="120px" height="40px" style="font-size:35px" >deleteID</td>
            <td width="120px" height="40px" style="font-size:35px">bookID</td>
            <td width="120px" height="40px" style="font-size:35px" >bookName</td>
            <td width="120px" height="40px" style="font-size:35px">deleteTime</td>

            <td width="120px" height="40px" style="font-size:35px">librarianName</td>
        </tr>

        <?php
        session_start();

        //$name=$_SESSION['name'];//用户名

        //  $name="2016303265";//用户名

        $conn=mysqli_connect("localhost","root","root","bibliosoft");
        mysqli_set_charset($conn,"utf8");
        if($conn){


                $sql="SELECT * FROM deleteinfor";
//                header('Location: Reader.php');
            $res= mysqli_query($conn,$sql);
            //  使用mysqli_query对于查询结果进行判别
            // if (mysqli_num_rows($res))
            $rows=$conn->query($sql);
            // echo $rows;

            // if(is_null($rows))
            if (mysqli_num_rows($res)<1){
                //    echo "<script>alert('you have not borrowed book yet');</script>";
                echo "<script language=javascript>alert('Empty!!');location.href='lib_edit.php';</script>";
            }else {

//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                foreach ($rows as $row) {
//                                    echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                    echo "<tr>";
                    echo "<th>{$row['deleteID']} </th>";
                    echo "<th>{$row['delete_bookID']}</th>";
                    echo "<th>{$row['delete_bookname']} </th>";
                    echo "<th>{$row['delete_time']} </th>";
                    echo "<th>{$row['librarian_name']}</th>";
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
