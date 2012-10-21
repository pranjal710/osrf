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
* Open_ils_simple_request
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/
require 'OsrfMessage.php';
require 'Parse.php';
require 'OsrfResponse.php';
/**
* Open_Ils_Simple_request
*
* @param array  $arr    parameters to pass to the method in an array
*
* @param string $m      method name
*
* @param string $s      service name
*
* @param string $server evergreen host
*
* @return string
*/
function Open_Ils_Simple_request($arr, $m, $s, $server)
{
    $endpoint = $server;
    if ($endpoint) {
        $a = new OsrfMessage($m, $s, $arr, $endpoint);
    } else {
        $a = new OsrfMessage($m, $s, $arr);
    }
    $response = $a->send();
    if ($response) {
        return $response->parse();
    } else {
        throw new Exception('Service Unavailable');
    }
}
?>
