<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search book</title>
    <style>
		table{
		border-collapse: collapse;
		border: 2px solid rgba(20,118,185,1.00);
	}
	th{
        text-align: center;
		color:rgba(91,89,89,1.00);
        font-size:180%
    }
    td{
        text-align: center;
        font-size:120%
    }
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
            <th >ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Appointed</th>
            <th>Borrowed</th>
            <th>Location</th>

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
//					echo $sql;
//					exit;
						
                    }else {
//                        echo "<script>alert('input can not be null');</script>";
                        echo "<script language=javascript>alert('input can not be null!!');location.href='lib_SearchBooks.php';</script>";
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
                        //echo "<script>alert('we do not have this book');</script>";
                        echo "<script language=javascript>alert('we do not have this book!!');location.href='lib_SearchBooks.php';</script>";
//提示框后返回指定界面
                        exit;
                        break;
                    }else {

                        foreach ($rows as $row) {
                            if($row['isAppointed']==1)$isAppointed="yes";
                            else $isAppointed="no";
                            if($row['isBorrowed']==1)$isBorrowed="yes";
                            else $isBorrowed="no";
//                                    echo " <form action=\"submit_do.php?action=act\" method=\"post\">";
//                                    echo "<button style=\"float: bottom\">sumbit</button>";
                            echo "<tr>";
                            echo "<td>" . $row['bookID'] . "</td>";
                            echo "<td>" . $row['bookName'] . "</td>";
                            echo "<td>" . $row['author'] . "</td>";
                            echo "<td>" . $row['publisher'] . "</td>";
                            echo "<td>" . $row['ISBN'] . "</td>";
                            echo "<td>" . $row['bookPrice'] . "</td>";
                            echo "<td>" . $isAppointed . "</td>";
                            echo "<td>" . $isBorrowed . "</td>";
                            echo "<td>" . $row['bookLocation'] . "</td>";
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

</body>
