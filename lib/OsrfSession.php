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
require_once 'OsrfMessage.php';
//require 'OpenIlsLogin.php';

use \GuzzleHttp\Client;

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
    /**
     * Server hosting the Evergreen instance to use.
     *
     * @var string
     */
    public $server;

    /**
     * Relative URL for the Fieldmapper Interface Description Language.
     *
     * This appears to expose some (but not all) services and methods;
     * we create a Fieldmapper to be able to call these services in code.
     *
     * @var string
     */
    public $fm_IDL;

    /**
    * Constructor.
    *
    * @param string $u hostname
    *
    * @return void
    */
    function __construct($u="localhost")
    {
        $this->server = $u;
        $this->fm_IDL = "/reports/fm_IDL.xml";
    }

    /**
    * Login (authenticate).
    *
    * See http://wiki.evergreen-ils.org/doku.php?id=mozilla-devel:birds_eye_view for some documentation on this.
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
            $seed = Open_Ils_Simple_request(
                $arr,
                'open-ils.auth.authenticate.init',
                'open-ils.auth',
                $this->server
            );
            $password = md5($seed . md5($password));
            $arr = array(
                "username"=>$username,
                "password"=>$password,
                "type"=>"opac"
            );
            $response1 = Open_Ils_Simple_request(
                array($arr),
                $m = 'open-ils.auth.authenticate.complete',
                $s = 'open-ils.auth',
                $this->server
            );
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
        $guzzleClient = new GuzzleHttp\Client([
            'base_url' => "http://" . $this->server,
        ]);
        $guzzleResponse = $guzzleClient->get($this->fm_IDL);
        $retcode = $guzzleResponse->getStatusCode();
        /** $retcode = 400 -> not found, $retcode = 200, found. **/
        return $retcode;
    }

    /**
    * Helper method to make a generic OpenSRF request.
    *
    * @param mixed ... arbitrary parameters to include in the OpenSRF call
    *
    * @return object
    */
    function request()
    {
        $service = func_get_arg(0);
        $method = func_get_arg(1);
        // Extract other parameters
        $numargs = func_num_args();
        $arr = array();
        $k = 2;
        while ($k < $numargs && func_get_arg($k) !== false) {
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
     * Helper method to parse objects into an array.
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
     * Get the location of the Fieldmapper file.
     *
     * @return string
     */
    function getFieldmapperFileName()
    {
        return sys_get_temp_dir().DIRECTORY_SEPARATOR."classfieldmapper-".$this->server.".php";
    }

    /**
     *
     * Write a new Fieldmapper file.
     *
     * @return void
     */
    function writeFieldmapper()
    {
        //Loop through the contents of the IDL XML and assign to arrays of class and field
        $xmlUrl = "http://" . $this->server . $this->fm_IDL;
        $xmlStr = file_get_contents($xmlUrl);
        $xmlObj = simplexml_load_string($xmlStr);
        $arrXml = $this->objectsIntoArray($xmlObj);
        $class = array();
        $field = array();
        foreach($arrXml['class'] as $i) {
            $class[] = $i['@attributes']['id'];
            $class_id = $i['@attributes']['id'];
            $inner = null;
            $field[$class_id] = array();
            foreach($i['fields']['field'] as $j) {
                if (isset($j['@attributes']['name']) && !is_null($j['@attributes']['name'])) {
                    $field[$class_id][] = $j['@attributes']['name'];
                }
            }
        }

        //Create our Fieldmapper...
        $myFile = $this->getFieldmapperFileName();
        $fh = fopen($myFile, 'w') or die("can't open file");
        $stringData = "<?php \n \n";
        fwrite($fh, $stringData);
        //Refer to a known file (assume location of library won't change).
        $classFile = str_ireplace(__CLASS__, 'FieldmapperClassAbstract', __FILE__);
        $stringData = "include (\"$classFile\"); \n \n";
        fwrite($fh, $stringData);
        //Write out our holding arrays as classes and fields
        foreach($class as $i){
            $stringData = "Class $i extends Fieldmapper_Class {\n";
            $stringData .= "  protected \$_properties = array(\n";
            fwrite($fh, $stringData);
            $stringData = null;
            foreach($field[$i] as $k => $v){
                $stringData .= '    "'.$k.'" => \''.$v.'\','."\n";
            }
            $stringData = substr($stringData, 0, -2);
            fwrite($fh, $stringData);
            $stringData = "\n  );\n";
            $stringData .= "}\n\n";
            fwrite($fh, $stringData);
        }
        // Finish up.
        $stringData = "?>";
        fwrite($fh, $stringData);
        fclose($fh);
    }
}
?>