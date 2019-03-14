<?php
$id=$_POST['id'];
$name=$_POST['name'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$isbn=$_POST['isbn'];
$price=$_POST['price'];
$type=$_POST['type'];
$appointed=$_POST['appointed'];
$borrowed=$_POST['borrowed'];
$location=$_POST['location'];
if(empty($id)){
    die('bookID is empty');
}
if(empty($name)){
    die('bookName is empty');
}
if(empty($author)){
    die('author is empty');
}
if(empty($publisher)){
    die('publisher is empty');
}
if(empty($price)){
    die('bookPrice is empty');
}
if(empty($type)){
    die('Type is empty');
}
if(empty($appointed)){
    die('isAppointed is empty');
}
if(empty($borrowed)){
    die('isBorrowed is empty');
}
if(empty($location)){
    die('bookLocation is empty');
}

//连接数据库
$con=mysqli_connect("localhost","root","root","bibliosoft");
//插入数据
$sql="select * from borrowinfor WHERE bookID='$id'";
$res =mysqli_query($con,$sql);
$row=mysqli_num_rows($res);
if($row>0){
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('This book has been loaned and cannot be revised.');</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
    }
}else{
	if(empty($isbn)){
		mysqli_query($con,"UPDATE bookinfor SET bookName='$name',author='$author',publisher='$publisher',ISBN='$isbn',bookPrice='$price',type='$type',isAppointed='$appointed',isBorrowed='$borrowed',bookLocation='$location' WHERE bookID='$id'");
    }else{
	$qt="select * from bookinfor where ISBN='$isbn'";
	$qtt=mysqli_query($con,$qt);
	$qts=mysqli_num_rows($qtt);
	$sq="select max(cast(bookID as unsigned)) as bookID from bookinfor where ISBN='$isbn'";
	$se=mysqli_query($con,$sq);
	$ss=mysqli_num_rows($se);
	$nu=mysqli_fetch_assoc($se);
	if($qts>0){
	$num=$nu['bookID'];
	$j=doubleval($num)+1;
	$bookID=$j;
	}else{
		$br='001';
		$bookID=$isbn.$br;
	}
		mysqli_query($con,"delete from bookinfor where bookID='$id'");
		mysqli_query($con,"INSERT INTO bookinfor(bookID,bookName,author,publisher,ISBN,bookPrice,type,bookLocation) VALUES ('$bookID','$name','$author','$publisher','$isbn','$price','$type','$location')");
//		echo"<p>The bookID has changed and if you need to print, click the Print button.</p>";
	}
    if(mysqli_error($con)){
        echo mysqli_error($con);
    }else{
        echo "<script> alert('Revised successfully'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=lib_edit.php'>";
    }
}
?>