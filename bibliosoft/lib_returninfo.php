<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EditBooks</title>
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
        <form class="search_from" action="lib_returninfo.php" method="post">
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
        <th>borrowID</th>
        <th>returnID</th>
        <th>bookID</th>
        <th>bookName</th>
        <th>readerID</th>
        <th>readerName</th>
        <th>returnTime</th>
        <th>fineID</th>

        <!--        <th>Location</th>-->
        <!--        <th>Edit</th>-->
    </tr>
    <?php
    error_reporting(0);
    $search=$_GET['search'];
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
    $sql="select * from returninfor ";
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
    $sqli="select * from returninfor,bookinfor,reader_table  where returninfor.bookID=bookinfor.bookID and returninfor.readerID=reader_table.readerID limit $page,$pagesize";}
    else $sqli="select * from returninfor,bookinfor,reader_table  where returninfor.bookID=bookinfor.bookID and returninfor.readerID=reader_table.readerID AND (returninfor.readerID='$search' or bookinfor.bookName like '%$search%' or returninfor.bookID = '$search')limit $page,$pagesize";
//    echo $sqli;
    $result = mysqli_query($con,$sqli);
    while($row = mysqli_fetch_array($result))
    {
        $id=$row['borrowID'];
//        if($row['isAppointed']==1)$isAppointed="yes";
//        else $isAppointed="no";
//        if($row['isBorrowed']==1)$isBorrowed="yes";
//        else $isBorrowed="no";
        echo "<tr>";
        echo "<td>" . $row['borrowID'] . "</td>";
        echo "<td>" . $row['returnID'] . "</td>";
        echo "<td>" . $row['bookID'] . "</td>";
        echo "<td>" . $row['bookName'] . "</td>";
        echo "<td>" . $row['readerID'] . "</td>";
        echo "<td>" . $row['readerName'] . "</td>";
        echo "<td>" . $row['returnTime'] . "</td>";
        echo "<td>" . $row['fineID'] . "</td>";
//        echo "<td><a href='revise.php?id=$id'>Revise</a> ";?>
<!--        <a href="delete.php?id=--><?php //echo($id)?><!--" onclick="return delete();">Delete</a>-->
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
//        if(empty($search)){
//        echo "<a href='$url?page=1'><button type='button'>Home page</button></a>";}
       echo "<a href='$url?page=1&search=$search'><button type='button'>Home page</button></a>";
        echo "&nbsp;";
        //第一页的时候没有上一页\
        if ($pageval > 1) {
            $test1=$pageval -1;
        if(empty($search)){
            echo "<a href='$url?page=$test1'><button type='button'>Previous page</button></a>";}
            else echo "<a href='$url?page=$test1&search=$search'><button type='button'>Previous page</button></a>";
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