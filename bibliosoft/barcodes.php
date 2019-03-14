<!DOCTYPE html>
<html>
<head>
<title>Barcode</title>
</head>
<body>
<?php
	$td=$_GET['text'];
$ts=unserialize(gzuncompress(base64_decode($td)));
	for($i=0;$i<count($ts);$i++){
		echo"<img src='barcode.php?text=$ts[$i]' alt='barcode' />
	<br/> ";
	}
	$tss=base64_encode(gzcompress(serialize($ts)));
	echo"<a href='barcodeword.php?text=$tss'><button>Print</button></a>";
//	header('refresh:6;url=lib_index.php');
//    echo "Automatically return to the home page after 6 seconds.";
//    exit;
	?>
</body>
</html>