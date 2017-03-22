<?php 
$barcodes = glob('barcodes/*');
?>
<?php foreach($barcodes as $barcode){?>
    <div style="float:left; width:100px;"> <img src="<?php echo $barcode ?>" /> </div>
<?php } ?>