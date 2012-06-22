<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
$obj = new ancc();
$obj->item_type = 'T';
echo json_encode($obj->encodeForOpenSRF());
?>
