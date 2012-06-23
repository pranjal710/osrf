<?php
include ("stdclass_to_array.php");

function decodejson2obj($json_obj) {
	$json_obj_parsed = stdclass_to_array(json_decode($json_obj));
	//echo "Class: <pre>"; print_r ($json_obj_parsed['__c']); echo "<pre>";
	//echo "Parameters: <pre>"; print_r ($json_obj_parsed['__p']); echo "<pre>";

	$class = $json_obj_parsed['__c'];
	$parameter = $json_obj_parsed['__p'];
	$new = new $class();
	for ($c = 0 ; $c < (count($parameter)) ; $c++) {
		$key1 = $new->_properties[$c];
		if (isset($parameter[$c])) {
		$new->$key1 = $parameter[$c];
		}
	}
	echo "<strong>New Object: </strong><br /><pre>";
	print_r ($new);
	echo "</pre><br />";
	return $new;
}
?>
