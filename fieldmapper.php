<?php
/**
* opensrf_php
*
* PHP version 5
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
/**
* Fieldmapper
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/
require 'parse_xml_2_array.php';
$myFile = PATH_TO_FIELDMAPPER."classfieldmapper-".$this->server.".php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "<?php \n \n";
fwrite($fh, $stringData);
$stringData = "include (\"".
PATH_TO_OSRF_PHP_LIB."fieldmapper_class_abstract.php\"); \n ";
fwrite($fh, $stringData);
for ($i=0 ; $class[$i] != null ; $i++) {
    $id = null;
    $stringData = "Class ".$class[$i]." extends 
    Fieldmapper_Class{\nprotected \$_properties = array(";
    $id = $class[$i];
    $data = null;
    fwrite($fh, $stringData);
    for ($j=0 ; $field[$id][$j] != null ; $j++) {
        $data = $data.'"'.$j.'" => \''.$field[$id][$j].'\', ';
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
