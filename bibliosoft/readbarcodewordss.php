<?php
require_once('barcodewords.php');
$td=$_GET['text'];
$html="<img src='http://127.0.0.1/bibliosoft/barcode.php?text=$td' alt='barcode'<br/> ";
 $word = new word(); 
 $word->start(); 
 $wordname="Barcode1.doc"; 
 echo $html; 
 $word->save($wordname); 
 ob_flush();
 flush(); 
echo "<script> alert('The print is successful and the file is saved in Barcode1.doc.'); </script>"; 
echo "<meta http-equiv='Refresh' content='1;URL=lib_index.php;'>";
?>