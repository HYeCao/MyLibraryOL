<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fine Record</title>
    <style>
        .bg{
            background: url("img/p3.jpg") ;
            background-size:cover;
        }
    </style>
</head>
<body class="bg">

<div id="content" style="height:600px;width:900px; float:left;">
    <div class="box">
        <div class="search_box">
            <form class="search_from" action="lib_fine.php" method="post">
            <span>
                <input class="search_input" type="text" name="readerID" placeholder="please input the ID of reader that you want to search ">
                <input class="search_button" type="submit" value="search">
            </span>
            </form>
        </div>
    </div>
    <p></p>
    <!--        <form >-->
    <table border="1" align="center" cellspacing="0">
        <tr>
            <td width="120px" height="40px" style="font-size:35px" >readerID</td>
            <td width="120px" height="40px" style="font-size:35px" >readerName</td>
            <td width="120px" height="40px" style="font-size:35px">fineID</td>
            <td width="120px" height="40px" style="font-size:35px">fineValue</td>
            <td width="120px" height="40px" style="font-size:35px">isPaid</td>
<!--			<td width="120px" height="40px" style="font-size:35px">Paytime</td>-->
        </tr>

        <?php
        error_reporting(0);
        $readerID=$_POST['readerID'];

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
        if(empty($readerID)){
        $sql="select * from reader_table,fineinfor where reader_table.fineID=fineinfor.fineID";}
        else $sql="select * from reader_table,fineinfor where reader_table.fineID=fineinfor.fineID and readerID=($readerID)";
        $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);

        while($row = mysqli_fetch_array($query))
        {
//            echo "<tr>";
//            echo "<td>" . $row['readerName'] . "</td>";
//            echo "<td>" . $row['fineID'] . "</td>";
            echo " <form action=\"lib_finepay.php?action=act\" method=\"post\">";
            echo "<tr>";
            echo "<td>" . $row['readerID'] . "</td>";
            echo "<td>" . $row['readerName'] . "</td>";
            echo "<td>" . $row['fineID'] . "</td>";
            echo "<td>" . $row['fineValue']. "</td>";
            if($row['isPaid']==-1) {
                echo "<td>" .NO. "</td>";
            }
            else echo "<td>" . YES. "</td>";
?>
            <?php echo"</td>";
            echo"<th><button style=\"float: right\" name='test' value={$row['fineID']}>Paid</button></th>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</thead>";
        echo "</table>";

        mysqli_close($con);

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
