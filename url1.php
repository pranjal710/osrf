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
* Creates object to send
*
* @param string $method The method
*
* @param array  $ar     Data
*
* @return string
*/
function urldata($method, $ar)
{
    $myobject3 = new stdClass;
    $myobject3->method = $method;
    $myobject3->params = $ar;
    $myobject2 = new stdClass;
    $myobject2->__c = 'osrfMethod';
    $myobject2->__p = $myobject3;
    $myobject0 = new stdClass;
    $myobject0->threadTrace = 0;
    $myobject0->type = 'REQUEST';
    $myobject0->payload = $myobject2;
    $myobject0->locale = 'en-US';
    $myobject = new stdClass;
    $myobject->__c = 'osrfMessage';
    $myobject->__p = $myobject0;
    $d = array($myobject);
    $r = json_encode($d);
    $d1 = 'osrf-msg=' . urlencode($r);
    return $d1;
}
?>
