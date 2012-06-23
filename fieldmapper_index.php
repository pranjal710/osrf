<?php
include ("fieldmapper.php");
include ("classfieldmapper.php");
include ("stdclass_to_array.php");

$obj = new ancc();
$obj->item_type = 'T';
echo "<strong>Fieldmapper_index: </strong><br /><pre>";
print_r ($obj);
echo "</pre><br />";
echo json_encode($obj->encodeForOpenSRF())."<HR />";
$json_obj = json_encode($obj->encodeForOpenSRF());

$json_obj_parsed = stdclass_to_array(json_decode($json_obj));
echo "Class: <pre>"; print_r ($json_obj_parsed['__c']); echo "<pre>";
echo "Parameters: <pre>"; print_r ($json_obj_parsed['__p']); echo "<pre>";

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
echo "</pre><br />"
?>
