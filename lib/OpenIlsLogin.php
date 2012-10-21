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
* Open_ils_login
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/
require 'OpenIlsSimpleRequest.php';
require 'StdclassToArray.php';
/**
* Open_Ils_login
*
* @param string $username evergreen login username
*
* @param string $password evergreen login password
*
* @param string $server   evergreen host
*
* @return string
*/
function Open_Ils_login($username, $password, $server)
{
    $arr = array($username);
    $m = 'open-ils.auth.authenticate.init';
    $s = 'open-ils.auth';  
    try {
        $seed = Open_Ils_Simple_request($arr, $m, $s, $server);
    } catch (Exception $e0) {
        echo 'Error: ',  $e0->getMessage(), "\n";
    }
    $password = md5($seed . md5($password));
    $arr = array("username"=>$username, "password"=>$password, "type"=>"opac"); 
    try {
        $response1 = Open_Ils_Simple_request(
            array($arr), 
            $m = 'open-ils.auth.authenticate.complete', 
            $s = 'open-ils.auth', 
            $server
        );
    } catch (Exception $e1) {
            echo 'Error: ',  $e1->getMessage(), "\n";
    }
    
    $login_response = $response1;
    if ($login_response['ilsevent']=='0') {
        return $login_response['payload']['authtoken'];
    } else {
        throw new Exception('Login Error');
    }
}
?>
