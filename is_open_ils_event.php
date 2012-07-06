<?php
function is_open_ils_event($o) {
         return is_array($o) && array_key_exists("ilsevent", $o);
       }
?>
