<?php
include ("open_ils_login.php");
include ("fieldmapper_index.php");
$authtoken = open_ils_login('pranjal', 'prabhasH1');      ////  $t = Authentication token

echo "For Target = 2";
$response_hold = open_ils_simple_request(array($authtoken, $obj->encodeForOpenSRF()), $m = 'open-ils.circ.holds.create', $s = 'open-ils.circ');
echo "<pre>";
print_r ($response_hold); 
echo "</pre> <HR />";
//echo "<pre>"; print_r (decodejson2obj($response_hold)); echo "</pre>";



echo "For Target = 3";
$response_hold1 = open_ils_simple_request(array($authtoken, $obj1->encodeForOpenSRF()), $m = 'open-ils.circ.holds.create', $s = 'open-ils.circ');
echo "<pre>";
print_r ($response_hold1); 
echo "</pre> <HR />";
?>
