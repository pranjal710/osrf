<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");
//$obj = new ancc();
//$obj->circ_time = 'now';
//$obj->circ_lib = new aou();
//$obj->circ_lib->id = new ancc();
//$obj->circ_lib->id = 1;
//$obj->circ_lib->id = 1;
//echo "<pre>"; print_r ($obj); echo "</pre>";
//echo json_encode($obj->encodeForOpenSRF());
$x = '{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]},null,{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]},null,null]},null,null,{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]}]}';
echo "<pre>"; print_r (decodejson2obj($x)); echo "</pre>";
?>