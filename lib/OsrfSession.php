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
    function login($username, $password)
    {
        try {
            $arr = array($username);
            $m = 'open-ils.auth.authenticate.init';
            $s = 'open-ils.auth';
            try {
                $seed = Open_Ils_Simple_request($arr, $m, $s, $this->server);
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
                        $this->server
                    );
            } catch (Exception $e1) {
                echo 'Error: ',  $e1->getMessage(), "\n";
            }

            $login_response = $response1;
            if ($login_response['ilsevent']=='0') {
                $value = $login_response['payload']['authtoken'];
            } else {
                $msg = $login_response['textcode'] . ': ' . $login_response['desc'];
                throw new Exception("Login Error for username '$username': $msg");
            }

        } catch (Exception $e) {
            $msg = $e->getMessage();
            throw new Exception("Login Error: $msg");
        }
        return $value;
    }

    /**
    * loadFieldmapper
    *
    * @param string $useExistingFieldMapper bool
    *
    * @return void
    */
    function loadFieldmapper($useExistingFieldMapper)
    {
        if ($useExistingFieldMapper == false) {
            $this->writeFieldmapper();
        }
        $mapperFileName = $this->getFieldmapperFileName();
        if (!(file_exists($mapperFileName))) {
            throw new Exception(
                'Could not locate Fieldmapper ' . $mapperFileName
            );
        } else {
            return include $mapperFileName;
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
    /**
     * objectsIntoArray
     *
     * @param array $arrObjData     array index
     *
     * @param array $arrSkipIndices array index to skip
     *
     * @return string
     */
    function objectsIntoArray($arrObjData, $arrSkipIndices = array())
    {
        $arrData = array();
        if (is_object($arrObjData)) {
            $arrObjData = get_object_vars($arrObjData);
        }
        if (is_array($arrObjData)) {
            foreach ($arrObjData as $index => $value) {
                if (is_object($value) || is_array($value)) {
                    $value = $this->objectsIntoArray($value, $arrSkipIndices);
                }
                if (in_array($index, $arrSkipIndices)) {
                    continue;
                }
                $arrData[$index] = $value;
            }
        }
        return $arrData;
    }
    /**
     * getFieldmapperFileName
     *
     * @return string
     */
    function getFieldmapperFileName()
    {
        return sys_get_temp_dir().DIRECTORY_SEPARATOR."classfieldmapper-".$this->server.".php";
    }
    /**
     * writeFieldmapper
     *
     * Writes a new Fieldmapper file.
     *
     * @return void
     */
    function writeFieldmapper()
    {
        $xmlUrl = $this->fm_IDL;
        $xmlStr = file_get_contents($xmlUrl);
        $xmlObj = simplexml_load_string($xmlStr);
        $arrXml = $this->objectsIntoArray($xmlObj);
        $class = array();
        $field = array();
        for ($i= 0 ; $arrXml['class'][$i]['@attributes']['id'] != null ; $i++) {
            $class[] = $arrXml['class'][$i]['@attributes']['id'];
            $class_id = $arrXml['class'][$i]['@attributes']['id'];
            $inner = null;
            $field[$class_id] = array();
            for (
                $j= 0 ;
            $arrXml['class'][$i]['fields']['field'][$j]['@attributes']['name'] != null ;
            $j++
            ) {
                $field[$class_id][]
                = $arrXml['class'][$i]['fields']['field'][$j]['@attributes']['name'];
            }
        }

        $myFile = $this->getFieldmapperFileName();
        $fh = fopen($myFile, 'w') or die("can't open file");
        $stringData = "<?php \n \n";
        fwrite($fh, $stringData);
        //Refer to a known file (assume location of library won't change).
        $classFile = str_ireplace(__CLASS__, 'FieldmapperClassAbstract', __FILE__);
        $stringData = "include (\"$classFile\"); \n ";
        fwrite($fh, $stringData);
        for ($i=0 ; $class[$i] != null ; $i++) {
            $id = null;
            $stringData = "Class ".$class[$i]." extends
        Fieldmapper_Class{\nprotected \$_properties = array(";
            $id = $class[$i];
            $data = null;
            fwrite($fh, $stringData);
            for ($j=0 ; $field[$id][$j] != null ; $j++) {
                $data = $data.'"'.$j.'" => \''.$field[$id][$j].'\', ';
            }
            $stringData = substr($data, 0, -2);
            fwrite($fh, $stringData);
            $stringData = "); \n} \n \n";
            fwrite($fh, $stringData);
        }
        $stringData = "?>";
        fwrite($fh, $stringData);
        fclose($fh);
    }
}
?>