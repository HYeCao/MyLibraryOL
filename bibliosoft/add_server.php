<?php
$names=$_POST['name'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$isbn=$_POST['isbn'];
$price=$_POST['price'];
$location=$_POST['location'];
$type=$_POST['type'];
$number=intval($_POST['number']);
if(empty($names)){
    die('name is empty');
}
if(empty($author)){
    die('author is empty');
}
if(empty($publisher)){
    die('publisher is empty');
}
if(empty($price)){
    die('price is empty');
}
if(empty($location)){
    die('location is empty');
}
if(empty($type)){
    die('type is empty');
}
if(empty($number)){
    die('number is empty');
}
$con=mysqli_connect("localhost","root","root","bibliosoft");
$arr=array();
$z=0;
if(empty($isbn)){
    $re=mysqli_query($con,"select * from bookinfor where bookName='$names' and author='$author' and publisher='$publisher'");
	$ra=mysqli_fetch_assoc($re);
	$ro=intval(mysqli_num_rows($re));
	if($ro>0){
		$isbn=$ra['ISBN'];
	}
	else{
	$ee=mysqli_query($con,"select * from bookinfor where ISBN IS NULL");
	$el="select max(cast(bookID as unsigned)) as bookID from bookinfor where ISBN IS NULL";
	$els=mysqli_query($con,$el);
	$eles=mysqli_fetch_assoc($ee);
	$elss=mysqli_fetch_assoc($els);
		if(is_null($eles)){
			for($a=1;$a<=$number;$a++){
			    $t='1000';
                $p=str_pad($a,3,"0",STR_PAD_LEFT);
				$bookID=$t.$p;
				$arr[$z]=$bookID;
		$sl="INSERT INTO bookinfor(bookID,bookName,author,type,publisher,bookPrice,bookLocation) VALUES ('$bookID','$names','$author','$type','$publisher','$price','$location')";
		mysqli_query($con,$sl);
		$z++;
			}
		}else{
	    $elt=doubleval($elss['bookID']);
		for($j=1;$j<=$number;$j++){
		$bookID=$elt+$j;
		$arr[$z]=$bookID;
		$sl="INSERT INTO bookinfor(bookID,bookName,author,type,publisher,bookPrice,bookLocation) VALUES ('$bookID','$names','$author','$type','$publisher','$price','$location')";
		mysqli_query($con,$sl);
		$z++;
	}
	}
	}
}else {
//连接数据库
    $res = mysqli_query($con, "select * from bookinfor where ISBN='$isbn'");
    $row = mysqli_num_rows($res);
    $result = mysqli_fetch_assoc($res);
    if (is_null($result)) {
        for ($i = 1; $i <= $number; $i++) {
            $t = str_pad($i, 3, "0", STR_PAD_LEFT);
            $bookID = $isbn . $t;
            $arr[$z] = $bookID;
            $sq = "INSERT INTO bookinfor(bookID,bookName,author,type,publisher,ISBN,bookPrice,bookLocation) VALUES ('$bookID','$names','$author','$type','$publisher','$isbn','$price','$location')";
            mysqli_query($con, $sq);
            $z++;
        }
    } else {
        $rt = "select max(cast(bookID as unsigned)) as bookID from bookinfor where ISBN='$isbn'";
        $rts = mysqli_query($con, $rt);
        $rtss = mysqli_fetch_assoc($rts);
        $r = doubleval($rtss['bookID']);
        for ($j = 1; $j <= $number; $j++) {
            $bookID = $r + $j;
            $arr[$z] = $bookID;
            $sl = "INSERT INTO bookinfor(bookID,bookName,author,type,publisher,ISBN,bookPrice,bookLocation) VALUES ('$bookID','$names','$author','$type','$publisher','$isbn','$price','$location')";
            mysqli_query($con, $sl);
            $z++;
        }
    }
}
$tr=base64_encode(gzcompress(serialize($arr)));
if(mysqli_error($con)){
    echo mysqli_error($con);
}else{
	echo "<script> alert('Added successfully'); </script>";
    echo "<meta http-equiv='Refresh' content='1;URL=barcodes.php?text=$tr'>";
}
?>
