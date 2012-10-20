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
    
    $result = $ses->request("open-ils.circ", "open-ils.circ.holds.create", $authtoken, $hold)->parse();
    if ($result) {
        /* Upon failure, result can be one OpenILS::Event object (represented
         * an an associative array here) *or* an array of them. */
        if (is_array($result)) {
            if ($result[0]) {
                foreach ($result as $r) {
                    echo "Could not place hold because of error: " . $r["desc"];
                }
            } else {
                echo "Could not place hold because of error: " . $result["desc"];
            }
        } 
        /* Upon success, the result is a simple integer. */
        else echo "Placed hold successfully. ID is $result.";
    }
    else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>
