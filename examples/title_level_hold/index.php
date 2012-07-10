<?php
include ("./../../osrfSession.php");

$ses = new osrfSession("hostname"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {
	
	$ses->loadcache(TRUE);	//FALSE to parse fieldmapper and create new fieldmapper class, TRUE for all other cases.
	include ("./../../open_ils_login.php");
	$authtoken = $ses->login('username', 'password');      ////  Authentication token
	
	$hold = new ahr();
	$hold->target = 3;
	$hold->hold_type = "T";
	$hold->pickup_lib = 4;
	$hold->request_lib = 4;
	$hold->requestor = 1;
	$hold->usr = 1;
	
	$response = $ses->request("open-ils.circ", "open-ils.circ.holds.create", $authtoken, $hold)->parse_resp();
	if ($response) {
		if (is_open_ils_event($response)) {
			echo "Could not place hold because of error: " . $response["desc"];
		} 
		else echo "Placed hold successfully. ID is " . $response;
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>