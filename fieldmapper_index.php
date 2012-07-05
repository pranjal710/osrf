<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");

$obj = new ancc();
$obj->circ_time = 'now';
$obj->circ_lib = new ancc();
$obj->circ_lib->circ_lib = 'abc';
echo "<pre>"; print_r ($obj); echo "</pre><HR />";
echo "<pre>"; print_r ($obj->encodeForOpenSRF()); echo "</pre><HR />";
echo "<pre>"; print_r (json_encode($obj->encodeForOpenSRF())); echo "</pre><HR />";
//$x = '{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]},null,{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]},null,null]},null,null,{"__c":"ancc","__p":["now",null,{"__c":"ancc","__p":["now",null,null,null,null,null]},null,null,null]}]}';
//echo "<pre>"; print_r (decodejson2obj($x)); echo "</pre>";
?>