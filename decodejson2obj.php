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
* Recursively decodes json to objects
*
* @param string $json_obj The json object
*
* @return object
*/
function decodejson2obj($json_obj)
{
    $json_obj_parsed = Stdclass_To_array(json_decode($json_obj)); //print_r ($json_obj_parsed);
    $class = $json_obj_parsed['__c'];
    $parameter = $json_obj_parsed['__p'];
    $new = new $class();
    for ($c = 0 ; $c < (count($parameter)) ; $c++) {
        $key1 = $new->_properties[$c];
        if (isset($parameter[$c])) {
            if (is_array($parameter[$c])) {
                $x = $parameter[$c];
                $new->$key1 = recursive($x);
            } else {
                $new->$key1 = $parameter[$c];
            }
        }
    }
    return $new;
}

 /**
* Recursively decodes json to objects
*
* @param string $obj The json object
*
* @return object
*/

function recursive($obj)
{
    if ((is_array($obj)) && (array_key_exists('__c', $obj))) {
        $class = $obj['__c'];
        $parameter = $obj['__p'];
        $new = new $class();
        for ($c = 0 ; $c < (count($parameter)) ; $c++) {
            $key1 = $new->_properties[$c];
            if (isset($parameter[$c])) {
                if (is_array($parameter[$c])) {
                    $x = $parameter[$c];
                    $new->$key1 = recursive($x);
                } else {
                    $new->$key1 = $parameter[$c];
                }
            }
        }
    
        return $new;
    } else {
        for ( $i = 0 ; $i < (count($obj)) ; $i++ ) {
        $new = recursive($obj[$i]);
        }
        //$new = recursive($obj);
        return $new;
    }
}

/*
function recursive($obj)
{
    if (array_key_exists('__c', $obj)){
    $class = $obj['__c'];
    $parameter = $obj['__p'];
    $new = new $class();
    for ($c = 0 ; $c < (count($parameter)) ; $c++) {
        $key1 = $new->_properties[$c];
        if (isset($parameter[$c])) {
            if (is_array($parameter[$c])) {
                $x = $parameter[$c];
                $new->$key1 = recursive($x);
            } else {
                $new->$key1 = $parameter[$c];
            }
        }
    }
    
    return $new;
    }
    else recursive1($obj);
}

function recursive1($obj)
{
    for ( $i = 0 ; $i < (count($obj)) ; $i++ ) {
        if (is_array($obj[$i])) $obj[$i] = recursive($obj[$i]);
        }
}
*/
?>
