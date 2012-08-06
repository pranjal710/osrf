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
require 'config.php';
/**
* OsrfSession
*
* @category PHP
* @package  Opensrf
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
            include "fieldmapper.php";
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
        $ch_idl = curl_init($this->fm_IDL);
        curl_setopt($ch_idl, CURLOPT_NOBODY, true);
        curl_exec($ch_idl);
        $retcode = curl_getinfo($ch_idl, CURLINFO_HTTP_CODE); 
        /** $retcode > 400 -> not found, $retcode = 200, found. **/
        curl_close($ch_idl);
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
    require 'decodejson2obj.php';
    require 'is_open_ils_event.php';
    require 'open_ils_login.php';
?>
