<?php
include ("OpenSRFSession.php");
$ses = new OpenSRFSession("localhost"); // remembers server & loads fieldmapper.
 
include ("open_ils_login.php");
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("decodejson2obj.php");
include ("is_open_ils_event.php");

$authtoken = $ses->login('pranjal', 'prabhasH1');      ////  $t = Authentication token

$hold = new ahr();
$hold->target = 3;
$hold->hold_type = "T";
$hold->pickup_lib = 4;
$hold->request_lib = 4;
$hold->requestor = 1;
$hold->usr = 1;

$response = $ses->request("open-ils.circ", "open-ils.circ.holds.create", $authtoken, $hold->encodeForOpenSRF())->parse_resp();
if ($response) {
	if (is_open_ils_event($response)) {
		echo "Could not place hold because of error: " . $response["desc"];
	} 
	else echo "Placed hold successfully. ID is " . $response;
}
else echo "Errors were encountered.";
?>
