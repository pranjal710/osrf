**OpenSRF-PHP**
===============

The PHP Binding for openSRF takes services, methods and data(also as parameter) to return a simple parsed output. The examples/ directory shows how to use the API.

*In Lebbeous Fogle-Weekley's words:*
>These PHP bindings for the OpenSRF library allow you to make requests and receive responses from OpenSRF services, such as those that comprise the Evegreen Integrated Library System (ILS).
>
>Examples of how to use the bindings to contact typical services for Evergreen are under the examples/ directory.
>
>Setting up an OpenSRF session will retrieve the fm_IDL.xml file from the targeted server, which provides that server's Interface Description Language.  This essentially means class definitions that allow certain data structures to be interpreted as objects in the Object-oriented sense.


**Requirements:** *PHP version > 5 and HTTP_Request2*



**Files**

**config.php**

This is the main configuration page. It holds the Golbal Variable which define the full path to classfieldmapper file.



**decodejson2obj.php**

*function decodeFromOpenSRF($data)*

Recursively turns an already decoded json object *i.e.* The parameter $data to fieldmapper object



**fieldmapper.php**

*abstract class Fieldmapper_Class*

Create/overwrites a dynamic file *i.e.* Classfieldmapper.php from parsed data obtained from fm_IDL (http://hostname/reports/fm_IDL.xml). Its member functions are getter, setter and encodeforopensrf().

*Fieldmapper_Class::function encodeForOpenSRF()*

It recursively encodes an object to be send to opensrf.



**fieldmapper_class_abstract.php**

It is an abstract class which holds the methods that is used by the numerous class of classfieldmapper.php



**guid.php**

*function guid()*

It returns a guid. A guid can be used to keep a record in a stateless session.



**is_open_ils_event.php**



**open_ils_login.php**

*function Open_Ils_login($username, $password, $server)*

It takes three parameters (username, password , server) and returns an authtoken on successfully login. It calls open_ils_simple_request to get a response.



**open_ils_simple_request.php**

*function Open_Ils_Simple_request($arr, $m, $s, $server)*

This is one of the most important function. It takes three parameters (method, service, and an array) as parameters. The array contains data to form the HTTP header. It returns a parsed response.



**osrfMessage.php**

This class is used in sending and retrieving messages to openSRF service. Its member functions are:
constructor, getguid(), setguid(), toarray(),header(), send(), 



**osrfResponse.php**

This class helps to parse the HTTP response. Each instance of this class holda a HTTP respomse in its 'data' property. 



**osrfSession.php**

This is that class, whose instance is used by the examples file, and it calls other functions.



**parse.php**

*function Parse_HTTP_response($string)*

$string is a string which holds the HTTP response. The function returns an array, which is the parsed HTTP response.



**parse_xml_2_array.php**

*function objectsIntoArray($arrObjData, $arrSkipIndices = array())*

It takes two parameters, one as an array object and the other parameter tells which index to miss. It is a generic function to parse an xml into an array



**stdclass_to_array.php**

*function Stdclass_To_array($ar)*

This takes one parameter *i.e.* $ar. $ar can be an array or an object. It returns an array by converting the object to an associative array.



**url1.php**

*function urldata($method, $ar)*

One parameter tell about the method to use and the other array $ar holds the data which is used to form the encoded url




**A brief overview of the functioning of openSRF-PHP API**
============================================================

*Open_Ils_Simple_request()* present in *open_ils_simple_request.php* mainly manages the process. it creates an instance of *osrfMessage Class* and then parses it through another instance of *osrfResponse Class* and its member functions.

An instance of *Class osrfMessage* is used to interact with openSRF service. method, service, endpoint and param are set by the *constructor*. *setGuid()* sets the guid so that an HTTP header can be formed, and it can also help in creating a stateful session when required. With the information gathered a HTTP header is created by *function header()*. *Function toArray()* creates $data which will be used by the curl handle. *function send()* uses libcurlto interact with openSRF. If successfull, it returns a HTTP response. 

HTTP response has to be parsed to get the desired result. The result is a json encoded string. For this purpose *Class osrfResponse* is present. *Function send()* initializes $data property of an instance of *Class osrfMessage*. The *function parse()* is then used to parse the generic HTTP response to get the desired output and returns it.

*Open_Ils_Simple_request()* thus gets the parsed result. This functions takes four parameters which are an array, service, method and a server. The array contains the data to form the HTTP header. Depending upon the service, method and the array it gets the response. Other functions use *Open_Ils_Simple_request()* to get result *eg. function Open_Ils_login()* uses it to get an authtoken on successfull login, else it throws an exception.

When multiple user use it, in other words, in case of multiple session, each of these classes and functions should have multiple instances running. To make that happen we have a topmost class: *Class osrfSession*. The example scripts diectly use *Class osrfSession* instances. The constructor sets the server and fm_IDL. Its member functions do as they are named. *function login()* checks username/password for their authenticity. *function loadFieldmapper()* returns the path to *Class classfieldmapper*, which is defined in config.php. *function checkhost()* checks whether hostname entered is true or not and *function request()* deals with *Class osrfMessage*.

The user can use all these files by just including *osrfSession.php*, as it has all other files included. He first creates an instance of *Class osrfSession* and sets hostname, which also sets fm_IDL for different servers. Now he needs to load *Class classfieldmapper* so that he can use numerous the classes present in it. Depending upon whether to used a cached file or to create a new one he sets true or false resp. . Now he has all the required files and functions to go on. He can use an instance of any class(es) from classfieldmapper.php and use *Class osrfSession* member functions to interact with openSRF services.
