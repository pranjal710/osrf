<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");
$obj = new ancc();
$obj->circ_time = 'now';
$obj->circ_lib = new aou();
//$obj->circ_lib->id = 1;
echo "<pre>"; print_r ($obj); echo "</pre>";
echo json_encode($obj->encodeForOpenSRF());
//decodejson2obj(json_encode($obj->encodeForOpenSRF()))
?>
