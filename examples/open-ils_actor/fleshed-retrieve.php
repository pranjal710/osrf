<?php
function tree($a, $n = 0, $b = array())
{
if(!($b == array())) echo $b."<br />";
//echo "<pre>"; print_r ($a); echo "</pre>";
    $f = 1;
    if (array_key_exists('__p', $a)) {
	$n = $n + 2;
	tree($a['__p'], $n, $a['__c']);
        for ($s = 0 ; $s < $n ; $s++) echo "&nbsp;";
    $f = 2;
    }

    else  {
    $n = $n + 2;
	for ( $j = 0 ; array_key_exists($j, $a) ; $j++) {
	    if (is_array($a[$j]) && (!(empty($a[$j]))))
            tree($a[$j], $n);
	}
    $f = 2;
    }
    
}
?>

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
	
	$hold = new aou();
	
	$response = $ses->request("open-ils.actor", "open-ils.actor.user.fleshed.retrieve", $authtoken, 1)->parseResp();
	
	if ($response) {
		if (Is_Open_Ils_event($response)) {
			echo "Could not place hold because of error: " . $response['result']["desc"];
		} 
		else {
		tree($response['result']);
		}
	}
	else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>
