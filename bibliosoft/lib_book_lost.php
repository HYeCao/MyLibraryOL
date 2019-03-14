<?php
$bookid=$_GET['bookid'];
$fineid=$_GET['fineid'];
$con=mysqli_connect("localhost","root","root","bibliosoft");
if (!$con){
	die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"bibliosoft");
mysqli_set_charset($con, "UTF8");	
$sql="select bookPrice from bookinfor where bookID='$bookid'";
$res=mysqli_query($con,$sql);
$ress=mysqli_fetch_array($res);
$price=doubleval($ress['bookPrice']);
$sqli="select fineValue from fineinfor where fineID='$fineid'";
$resi=mysqli_query($con,$sqli);
$ressi=mysqli_fetch_array($resi);
$value=doubleval($ressi['fineValue']);
mysqli_query($con,"update bookinfor set isLost=1 where bookID='$bookid'");
$s=$price+$value;
mysqli_query($con,"update fineinfor set fineValue='$s' where fineID='$fineid'");
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
	echo "<script> alert('Success'); </script>";
    echo "<meta http-equiv='Refresh' content='1;URL=lib_borrowinfo.php'>";
}

?>