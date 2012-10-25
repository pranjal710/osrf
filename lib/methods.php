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
* is_open_ils_event
*
* @param array $o response array
*
* @return bool
*/
function Is_Open_Ils_event($o)
{
    return is_array($o) && array_key_exists("ilsevent", $o);
}
/**
* Given a data structure from OpenSRF, already json decoded, turn any
* array structures like array('__c' => 'foo', '__p' => array(abc,123,...))
* into fieldmapper objects.
*
* @param string $data A data structure
*
* @return object
*/

function decodeFromOpenSRF($data)
{
    if (!is_array($data)) {
        return $data;
    } else if (!isset($data['__c']) || !class_exists($data['__c'])) {
        return array_map('decodeFromOpenSRF', $data);
    }

    $class = $data['__c'];
    $new = new $class();
    foreach ($data['__p'] as $i => $value) {
        $field = $new->_properties[$i];
        if (!$field) {
            continue;
        }
        if (is_array($value)) {
            $new->$field = decodeFromOpenSRF($value);
        } else {
            $new->$field = $value;
        }
    }
    return $new;
}
/**
* Parse a http response
*
* @param string $string HTTP Response string
*
* @return array
*/
function Parse_Http_response($string)
{
    $headers = array();
    $content = '';
    $str = strtok($string, "\n");
    $h = null;
    while ($str !== false) {
        if ($h and trim($str) === '') {                
            $h = false;
            continue;
        }
        if ($h !== false and false !== strpos($str, ':')) {
            $h = true;
            list($headername, $headervalue) = explode(':', trim($str), 2);
            $headername = strtolower($headername);
            $headervalue = ltrim($headervalue);
            if (isset($headers[$headername])) {
                $headers[$headername] .= ',' . $headervalue;
            } else {
                $headers[$headername] = $headervalue;
            }
        }
        if ($h === false) {
            $content .= $str."\n";
        }
        $str = strtok("\n");
    }
    return array($headers, trim($content));
}
/**
* Stdclass_To_array
*
* @param array $ar array to convert to object
*
* @return array
*/
function Stdclass_To_array($ar)
{
    if (is_object($ar)) {
        $ar = get_object_vars($ar);
    }
    if (is_array($ar)) {
        return array_map(__FUNCTION__, $ar);
    } else {
        return $ar;
    }
}
