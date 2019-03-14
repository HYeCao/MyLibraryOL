<!DOCTYPE html>
<html>
<head>
<title>Barcode</title>
</head>
<body>
<?php
	$td=$_GET['text'];
		echo"<img src='barcode.php?text=$td' alt='barcode' />
	<br/> ";
	echo"<a href='readbarcodewordss.php?text=$td'><button>Print</button></a>";
//	header('refresh:6;url=lib_index.php');
//    echo "Automatically return to the home page after 6 seconds.";
//    exit;
	?>
</body>
</html>