<?php
include ("./../../osrfSession.php");

$ses = new osrfSession("localhost"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {
	
	try {
		$ses->loadFieldmapper(false); //FALSE to parse fieldmapper and create new fieldmapper class, TRUE for all other cases.
	} catch (Exception $e_load_idl) {
						echo 'Error: ', $e_load_idl->getMessage() , "\n";
					}
					
	$authtoken = $ses->login('username', 'password');      ////  Authentication token
	
	$hold = new ahr();
	$hold->target = 3;
	$hold->hold_type = "T";
	$hold->pickup_lib = 4;
	$hold->request_lib = 4;
	$hold->requestor = 1;
	$hold->usr = 1;
	
	$response = $ses->request("open-ils.circ", "open-ils.circ.holds.create", $authtoken, $hold)->parseResp();
	if ($response['result'][0]) {
		if (Is_Open_Ils_event($response['result'][0])) {
			echo "Could not place hold because of error: " . $response['result'][0]["desc"];
		} 
		else echo "Placed hold successfully. ID is " . $response['result'][0];
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>
