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
require 'Config.php';
require_once 'OpenIlsSimpleRequest.php';
require_once 'methods.php';
require_once 'OsrfMessage.php';
//require 'OpenIlsLogin.php';
/**
* OsrfSession
*
* @category PHP
* @package  Opensrf-php
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
class OsrfSession
{
    public $server;
    public $fm_IDL;
    /**
    * constructor
    *
    * @param string $u hostname
    *
    * @return void
    */
    function __construct($u="localhost") 
    {
        $this->server = $u;
        $this->fm_IDL = "http://".$u."/reports/fm_IDL.xml";
    }
    /**
    * constructor
    *
    * @param string $user username
    *
    * @param string $pass password
    *
    * @return string
    */
    function login($user, $pass)
    {
        try {
            $arr = array($username);
            $m = 'open-ils.auth.authenticate.init';
            $s = 'open-ils.auth';  
            try {
                $seed = Open_Ils_Simple_request($arr, $m, $s, $server);
            } catch (Exception $e0) {
                echo 'Error: ',  $e0->getMessage(), "\n";
            }
            $password = md5($seed . md5($password));
            $arr = array(
                            "username"=>$username, 
                            "password"=>$password, 
                            "type"=>"opac"
                        ); 
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
                $value = $login_response['payload']['authtoken'];
            } else {
                throw new Exception('Login Error');
            }

        } catch (Exception $e) {
            echo 'Error: ',  $e->getMessage(), "<br />";
        }
        return $value;
    }
    /**
    * loadFieldmapper
    *
    * @param string $option bool
    *
    * @return void
    */
    function loadFieldmapper($option)
    {
        if ($option == false) {
            include "Fieldmapper.php";
        }
        if (!(file_exists(
            PATH_TO_FIELDMAPPER."classfieldmapper-".$this->server.".php"
        ))) {
            throw new Exception(
                'Could not locate ClassFieldmapper as described in config.php.'
            );
        } else {
            return include PATH_TO_FIELDMAPPER."classfieldmapper-"
            .$this->server.".php";
        }
    }
    /**
    * checkhost
    *
    * @return int
    */
    function checkhost()
    {
        include_once 'HTTP/Request2.php';
        $request = new HTTP_Request2($this->fm_IDL, HTTP_Request2::METHOD_GET);
        $response = $request->send();
        $retcode = $response->getStatus();
        /** $retcode = 400 -> not found, $retcode = 200, found. **/
        return $retcode;
    }
    /**
    * request
    *
    * @return object
    */
    function request()
    {
        $service = func_get_arg(0); 
        $method = func_get_arg(1);
        $arr = array();
        $k = 2;
        while (func_get_arg($k) !== false) {
            $add = func_get_arg($k);
            if (is_object($add)) {
                $add = $add->encodeForOpenSRF();
            }
            $arr[] = $add;
            $k++;
        }
        $msg = new OsrfMessage($method, $service, $arr, $this->server);
        return $msg->send();
    } 
}
?>
