<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DeleteReaders</title>
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
        body{
            background:url("img/p3.JPG");
            background-size: 100%;
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-size: cover;
        }
        button{
            border: 3px solid rgba(25,72,154,1.00);
            border-radius: 10px;
            width: 110px;
            background-color:rgba(20,118,185,1.00);
            color:white;
        }
        a{
            text-decoration:none;
        }
        a:link{
            color: aqua;
        }
        a:hover{
            color: rgba(45,197,55,1.00);
        }
        a:active{
            color:rgba(232,26,29,1.00);
        }
        a:visited{
            color: rgba(241,16,20,1.00);
        }
    </style>
    <!--	<script>-->
    <!--		function delete(){-->
    <!--			var x=confirm("Do you want to delete it?");-->
    <!--			if(x==true){-->
    <!--				return true;-->
    <!--			}else{-->
    <!--				return false;-->
    <!--			}-->
    <!--}-->
    <!--	</script>-->
</head>
<body>
<div class="box">
    <div class="search_box">
        <form class="search_from" action="lib_readerinfo.php" method="post">
            <span>
                <input class="search_input" type="text" name="search" placeholder="please input the Information of reader that you want to search ">
                <input class="search_button" type="submit" value="search">
            </span>
        </form>
    </div>
</div>
<table  style="width:1400px;height:35px" border="1">
    <thead>
    <tr>
        <th>readerID</th>
        <th>readerName</th>
<!--        <th>isBorrowed</th>-->
<!--        <th>fineValue</th>-->
        <th>edit</th>
    </tr>
    <?php
    error_reporting(0);
    $search=$_POST['search'];
    $con=mysqli_connect("localhost","root","root","bibliosoft");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"bibliosoft");

    mysqli_set_charset($con, "UTF8");
    $pagesize=6;
    $url=$_SERVER["REQUEST_URI"];
    $url=parse_url($url);
    $url=$url['path'];
    $sql="select * from reader_table ";
    $query=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query);
    $pageval=1;
    $page=($pageval-1)*$pagesize;
    if(!empty($_GET['page'])){
        $pageval=$_GET['page'];
        if ($pageval<=0){
            $pageval=1;
        }
        $page=($pageval-1)*$pagesize;
    }
    if(empty($search)){
        $sqli="select * from reader_table limit $page,$pagesize";
    }
    else
    $sqli="select * from reader_table WHERE (readerID='$search' or readerName LIKE '%$search%')limit $page,$pagesize";
    $result = mysqli_query($con,$sqli);
    while($row = mysqli_fetch_array($result))
    {
        $id=$row['readerID'];
        $name=$row['readerName'];
        $sql1="select * from borrowinfor WHERE readerName=$name";
//        print_r($sql1);
        $result1 = mysqli_query($con,$sql1);
        $result2=mysqli_fetch_array($result1);
//        print_r($result2);
        if($row['isAppointed']==1)$isAppointed="yes";
        else $isAppointed="no";
        if($row['isBorrowed']==1)$isBorrowed="yes";
        else $isBorrowed="no";
        echo "<tr>";
        echo "<td>" . $row['readerID'] . "</td>";
        echo "<td>" . $row['readerName'] . "</td>";
//        echo "<td>" . $row['isBorrowed'] . "</td>";
//        echo "<td>" . $row['fineValue'] . "</td>";
        echo "<td> ";?>
        <a href="lib_reader_delete.php?id=<?php echo $id?>&&name=<?php echo  $name?>" onclick="return delete();">Delete</a>
    <a href='lib_reader_edit.php?id=<?php echo $id?>'>Revise</a>
        <?php echo"</td>";
        echo "</tr>";
    }
    echo "</thead>";
    echo "</table>";

    mysqli_close($con);

    ?>
    <div style="margin:50px"></div>
    <style>
        .wid{
            position:relative;
            left:500px}
    </style>
    <div  class="wid"  >
        <?php
        echo "A total of $rows records";
        echo "&nbsp;&nbsp";
        $pagenum=ceil($rows/$pagesize);
        echo "<a href='$url?page=1'><button type='button'>Home page</button></a>";
        echo "&nbsp;";
        //第一页的时候没有上一页\
        if ($pageval > 1) {
            $test1=$pageval -1;
            echo "<a href='$url?page=$test1'><button type='button'>Previous page</button></a>";
            echo "&nbsp;";
        }
        if ($pageval < $pagenum) {
            $test=$pageval+1;
            echo "<a href='$url?page=$test'><button type='button'>Next page</button></a>";
            echo "&nbsp;";
        }
        //尾页的时候不显示下一页
        echo "<a href='$url?page=$pagenum'><button type='button'>Tail page</button></a>";
        ?>
    </div>
</body>
</html>