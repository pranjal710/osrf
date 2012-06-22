<?php
include ("parse_xml_2_array.php");

$myFile = "classfieldmapper.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "<?php \n \n";
fwrite($fh, $stringData);
$stringData = "include (\"fieldmapper_class_abstract.php\"); \n ";
fwrite($fh, $stringData);
for($i=0 ; $class[$i] != NULL ; $i++) {
	$id = NULL;
	$stringData = "Class ".$class[$i]." extends fieldmapper_class{\nprotected \$_properties = array(";
	$id = $class[$i];
	$data = NULL;
	fwrite($fh, $stringData);
	for($j=0 ; $field[$id][$j] != NULL ; $j++) {
		$data = $data.'"'.$field[$id][$j].'", ';
	}
	$stringData = substr($data, 0, -2);
	fwrite($fh, $stringData);
	$stringData = "); \n} \n \n";
	fwrite($fh, $stringData);
}
$stringData = "?>";
fwrite($fh, $stringData);
fclose($fh);
?>