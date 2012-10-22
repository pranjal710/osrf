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
require 'DecodeJson2Obj.php';
require 'IsOpenIlsEvent.php';
require 'OpenIlsLogin.php';
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
            $value = Open_Ils_login($user, $pass, $this->server);
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
