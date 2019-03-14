<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<style>
	table{
		border-collapse: collapse;
		border: 2px solid rgba(20,118,185,1.00);
	}
	th{
        text-align: center;
		color:rgba(91,89,89,1.00);
        font-size:180%;
		border: 1px solid rgba(20,118,185,1.00);
    }
    td{
        text-align: center;
        font-size:120%;
		border: 1px solid rgba(20,118,185,1.00);
    }
	body{
		background:url("img/p3.JPG");
        background-size: 100%;
		background-attachment: fixed;
		background-repeat:no-repeat;
		background-size: cover;
	}
	</style>
</head>
<table>
	<tr>
	<th colspan="2">Day income</th>
	<th colspan="2">Weekly income</th>
	<th colspan="2">Monthly income</th>
	</tr>
	<tr>
	<td>Fine</td><td>Deposit</td>
	<td>Fine</td><td>Deposit</td>
	<td>Fine</td><td>Deposit</td>
	</tr>
<?php
	date_default_timezone_set('PRC');
	$con=mysqli_connect("localhost","root","root","bibliosoft");
            if (!$con)
            {
                die('Could not connect: ' . mysqli_error($con));
            }
    mysqli_select_db($con,"bibliosoft");
    mysqli_set_charset($con, "UTF8");
	$sql="select * from income_table";
	$res=mysqli_query($con,$sql);
	$dates=date('Y-m-j');
	$a=strtotime($dates);
	$d=0;
	$e=0;
	$f=0;
	$g=0;
	$h=0;
	$i=0;
	while($row=mysqli_fetch_array($res)){
		$b=strtotime($row['fineDate']);
		$c=strtotime($row['regDate']);
        if(date('z',$a)==date('z',$b)){
			$d+=intval($row['fineIncome']);
		}
		if(date('z',$a)==date('z',$c)){
			$e+=intval($row['regIncome']);
		}
		if(date('W',$a)==date('W',$b)){
			$f+=intval($row['fineIncome']);
		}
		if(date('W',$a)==date('W',$c)){
			$g+=intval($row['regIncome']);
		}
		if(date('m',$a)==date('m',$b)){
			$h+=intval($row['fineIncome']);
		}
		if(date('m',$a)==date('m',$c)){
			$i+=intval($row['regIncome']);
		}
	}
	    echo"<tr>";
	    echo "<td>".$d."</td><td>".$e."</td>";
		echo "<td>".$f."</td><td>".$g."</td>";
	    echo "<td>".$h."</td><td>".$i."</td>";
		echo"</tr>";
		echo"</table>";
?>
<body>
</body>
</html>