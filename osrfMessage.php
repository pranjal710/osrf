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
require_once 'guid.php';
require_once 'url1.php';
/**
* OsrfMessage
*
* @category PHP
* @package  Opensrf
* @author   Pranjal Prabhash <pranjal.prabhash@gmail.com>
* @license  http://www.gnu.org/copyleft/lgpl.html GNU Lesser General Public License
* @link     https://www.github.com/pranjal710/
*/
class OsrfMessage
{
    public $ch;
    public $guid;
    public $method;
    public $param = array();
    public $to;
    public $header;
    public $service;
    public $curl;
    public $server_result;
    public $endpoint;
    /**
    * constructor
    *
    * @param string $x method name
    *
    * @param string $z service name
    *
    * @param string $y parameter
    *
    * @param string $u endpoint
    *
    * @return string
    */
    function __construct($x, $z, $y, $u="opensrf")
    {
        if (is_string($x)) {
            $this->method = $x;
        } elseif (is_object($x)) {
            $this->method = $x;
        }
        if (is_string($z)) {
            $this->service = $z;
        } elseif (is_object($z)) {
            $this->service = $z;
        }
        $this->param = $y;
        $this->endpoint = $u;
    }
    /**
    * setter
    *
    * @param int $guid guid
    *
    * @return void
    */
    function setGuid($guid)
    {
        $this->guid = $guid;
    }
    /**
    * getter
    *
    * @return int
    */
    function getGuid()
    {
        return $this->guid;
    }
    /**
    * header
    *
    * @return string
    */
    function header()
    {
        $this->setGuid(guid());
        $this->header = array('X-OpenSRF-service: '.$this->service, 
        'X-OpenSRF-xid: '.time(), 'X-OpenSRF-thread: '.$this->getGuid());
        return $this->header;
    }
    /**
    * toArray
    *
    * @return string
    */
    function toArray()
    {
        $url4 = urldata($this->method, $this->param);
        return $url4;
    }
    /**
    * send
    *
    * @return string
    */
    function send()
    {
        $endpoint = $this->endpoint;
        $data = $this->toArray();
        $header = $this->header();
        $url_post = 'http://'.$endpoint.'/osrf-http-translator';
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url_post);
        curl_setopt($this->curl, CURLOPT_HEADER, 1);
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $header);
        $this->server_result = curl_exec($this->curl);
        if (curl_error($this->curl) != 0 ) {
            $error = 'Curl error: ' . curl_error($this->curl);
            return $error;
        }
        $res = new OsrfResponse($this->server_result);
        return $res;
    }
}
?>
