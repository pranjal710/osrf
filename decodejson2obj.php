<?php
include ("stdclass_to_array.php");

function decodejson2obj($json_obj) {
	$json_obj_parsed = stdclass_to_array(json_decode($json_obj));
	$class = $json_obj_parsed['__c'];
	$parameter = $json_obj_parsed['__p'];
	$new = new $class();
	for ($c = 0 ; $c < (count($parameter)) ; $c++) {
		$key1 = $new->_properties[$c];
		if (isset($parameter[$c])) {
		if(is_array($parameter[$c])) {
			$x = $parameter[$c];
			$new->$key1 = recursive($x);
		}
		else $new->$key1 = $parameter[$c];
		}
	}
	return $new;
}

function recursive($obj) {
	$class = $obj['__c'];
	$parameter = $obj['__p'];
	$new = new $class();
	for ($c = 0 ; $c < (count($parameter)) ; $c++) {
		$key1 = $new->_properties[$c];
		if (isset($parameter[$c])) {
		if(is_array($parameter[$c])) {
			$x = $parameter[$c];
			$new->$key1 = recursive($x);
		}
		else $new->$key1 = $parameter[$c];
		}
	}
	return $new;
}
?>
