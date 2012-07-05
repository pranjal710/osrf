<?php
include ("open_ils_login.php");
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");
include ("OpenSRFSession.php");

$ses = new OpenSRFSession("117.200.83.65"); // remembers server & loads
                                                 // fieldmapper.
$authtoken = $ses->login('pranjal', 'prabhasH1');      ////  $t = Authentication token
//echo $auth;

$hold = new ahr();
$hold->target = 3;
$hold->hold_type = "T";
$hold->pickup_lib = 4;
$hold->request_lib = 4;
$hold->requestor = 1;
$hold->usr = 1;

echo "<HR />";
$response = $ses->request("open-ils.circ", "open-ils.circ.holds.create", $authtoken, $hold);
echo "<pre>"; print_r ($response); echo "</pre>";
/*if (is_openils_event($response)) {
   echo "Could not place hold because of error: " . $response["desc"];
} else {
   echo "Placed hold successfully. ID is " . $response;
}
*/
?>
