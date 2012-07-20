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
* Open_ils_login
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
*/
require PATH_TO_OSRF_PHP_LIB.'open_ils_simple_request.php';
require PATH_TO_OSRF_PHP_LIB.'stdclass_to_array.php';
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
        $response0 = Open_Ils_Simple_request($arr, $m, $s, $server);
    } catch (Exception $e0) {
                echo 'Error: ',  $e0->getMessage(), "\n";
    }
    $seed = $response0->result;
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
    
    $login_response = Stdclass_To_array($response1);
    if ($login_response['result']['ilsevent']=='0') {
        return $login_response['result']['payload']['authtoken'];
    } else {
        throw new Exception('Login Error');
    }
}
?>
