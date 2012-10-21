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
require_once 'Guid.php';
require_once 'Url1.php';
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
        $this->header = array($this->service, 
        time(), $this->getGuid());
        return $this->header;
    }
    
    
    /**
    * toArray
    *
    * @param string $data json_encoded string
    *
    * @return string
    */
    function toArray($data)
    {
        return "osrf-msg=" . urlencode($data);
    }
    /**
    * send
    *
    * @return string
    */
    function send()
    {
        include_once 'HTTP/Request2.php';
        $endpoint = $this->endpoint;
        $data = urldata($this->method, $this->param);
        $header = $this->header();
        $url_post = 'http://'.$endpoint.'/osrf-http-translator';
        $request = new HTTP_Request2();
        $request->setUrl($url_post);
        $request->setHeader(
            array(
                                    'X-OpenSRF-service' => $header[0], 
                                    'X-OpenSRF-xid' => $header[1], 
                                    'X-OpenSRF-thread' => $header[2])
        );
        $request->setMethod(HTTP_Request2::METHOD_POST);
        $request->addPostParameter("osrf-msg", $data);
        $response = $request->send(); 
        $responseBody = $response->getBody();
        $responseHeader=$response->getHeader();
        $returnResponse = $responseBody."\n";
        foreach ($responseHeader as $key => $value) {
            $returnResponse = $returnResponse.ucfirst($key).": $value\n";
        }
        $res = new OsrfResponse($returnResponse);
        return $res;
    }
}
?>
