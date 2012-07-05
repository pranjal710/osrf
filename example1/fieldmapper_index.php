<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");

$obj = new ahr();
$obj->hold_type = 'T';
$obj->target = '2';
$obj->pickup_lib = '4';
$obj->request_lib = '4';
$obj->usr = '1';
$obj->requestor = '1';

$obj1 = new ahr();
$obj1->hold_type = 'T';
$obj1->target = '3';
$obj1->pickup_lib = '4';
$obj1->request_lib = '4';
$obj1->usr = '1';
$obj1->requestor = '1';

//echo "<pre>"; print_r ($obj); echo "</pre><HR />";
//echo "<pre>"; print_r ($obj->encodeForOpenSRF()); echo "</pre><HR />";
//echo "<pre>"; print_r (json_encode($obj->encodeForOpenSRF())); echo "</pre><HR />";
//$x = json_encode($obj->encodeForOpenSRF());
//echo "<pre>"; print_r (decodejson2obj($x)); echo "</pre>";
?>
