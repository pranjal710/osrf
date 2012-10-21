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
* Parse_xml_2_array
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/

/**
* objectsIntoArray
*
* @param array $arrObjData     array index
*
* @param array $arrSkipIndices array index to skip
*
* @return string
*/
function objectsIntoArray($arrObjData, $arrSkipIndices = array())
{
    $arrData = array();
    if (is_object($arrObjData)) {
        $arrObjData = get_object_vars($arrObjData);
    }   
    if (is_array($arrObjData)) {
        foreach ($arrObjData as $index => $value) {
            if (is_object($value) || is_array($value)) {
                $value = objectsIntoArray($value, $arrSkipIndices);
            }
            if (in_array($index, $arrSkipIndices)) {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
}

$xmlUrl = $this->fm_IDL;
$xmlStr = file_get_contents($xmlUrl);
$xmlObj = simplexml_load_string($xmlStr);
$arrXml = objectsIntoArray($xmlObj);
$class = array();
$field = array();
for ($i= 0 ; $arrXml['class'][$i]['@attributes']['id'] != null ; $i++) {
    $class[] = $arrXml['class'][$i]['@attributes']['id'];
    $class_id = $arrXml['class'][$i]['@attributes']['id'];
    $inner = null;
    $field[$class_id] = array();
    for (
    $j= 0 ; 
    $arrXml['class'][$i]['fields']['field'][$j]['@attributes']['name'] != null ; 
    $j++
    ) {
        $field[$class_id][] 
            = $arrXml['class'][$i]['fields']['field'][$j]['@attributes']['name'];
    }
}
?>
