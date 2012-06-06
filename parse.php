<?php
function parse_http_response ($string) 
    {

        $headers = array();
        $content = '';
        $str = strtok($string, "\n");
        $h = null;
        while ($str !== false) {
            if ($h and trim($str) === '') {                
                $h = false;
                continue;
            }
            if ($h !== false and false !== strpos($str, ':')) {
                $h = true;
                list($headername, $headervalue) = explode(':', trim($str), 2);
                $headername = strtolower($headername);
                $headervalue = ltrim($headervalue);
                if (isset($headers[$headername])) 
                    $headers[$headername] .= ',' . $headervalue;
                else 
                    $headers[$headername] = $headervalue;
            }
            if ($h === false) {
                $content .= $str."\n";
            }
            $str = strtok("\n");
        }
        return array($headers, trim($content));
    }
?>