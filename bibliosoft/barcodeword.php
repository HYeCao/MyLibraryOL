<?php
require_once('barcodewords.php');
$td=$_GET['text'];
$ts=unserialize(gzuncompress(base64_decode($td)));
$html='';
	for($i=0;$i<count($ts);$i++){
		$html.="<img src='http://127.0.0.1/bibliosoft/barcode.php?text=$ts[$i]' alt='barcode'<br/> ";
	}
 $word = new word(); 
 $word->start(); 
 $wordname="Barcode.doc"; 
 echo $html; 
 $word->save($wordname); 
 ob_flush();
 flush(); 
echo "<script> alert('The print is successful and the file is saved in Barcode.doc.'); </script>"; 
echo "<meta http-equiv='Refresh' content='1;URL=lib_index.php;'>";
?>