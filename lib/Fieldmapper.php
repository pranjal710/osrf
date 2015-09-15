<?php
/**
* opensrf-php
*
* PHP version 5
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
/**
* Fieldmapper
*
* @category PHP
* @package  Opensrf-php
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

/**
 * getFieldmapperFileName
 *
 * @return string
 */
function getFieldmapperFileName()
{
    //FIXME: server seems to be from OsrfSession
    return sys_get_temp_dir()."classfieldmapper-".$this->server.".php";
}

/**
 * writeFieldmapper
 *
 * Writes a new Fieldmapper file.
 *
 * @return void
 */
function writeFieldmapper()
{
    //FIXME: fm_IDL seems to be from OsrfSession
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

    $myFile = getFieldmapperFileName();
    $fh = fopen($myFile, 'w') or die("can't open file");
    $stringData = "<?php \n \n";
    fwrite($fh, $stringData);
    $stringData = "include (\"".
    PATH_TO_OSRF_PHP_LIB."FieldmapperClassAbstract.php\"); \n ";
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
}
?>
