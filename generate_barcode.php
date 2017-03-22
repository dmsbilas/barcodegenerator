<?PHP
require_once('barcode.inc.php'); 
require_once('unique_id.php');
$total = (isset($_POST['barcode_amount']) && $_POST['barcode_amount'] !='' ) ?  $_POST['barcode_amount'] : 0 ;
if($total == 0 )exit;
//Deleting old files
$files = glob('barcodes/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
//Old files are deleted 
for($i=0; $i<$total; $i++ )
{
    $code_number = getToken(8);
    new barCodeGenrator($code_number,1,'barcodes/barcode _'.$code_number.'.gif ', 190, 50, true);

}

header("Location: show_barcodes.php");

?>