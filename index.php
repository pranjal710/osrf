<?php
include ("open_ils_login.php");
$t = open_ils_login('username', 'password');
echo "<pre>";
print_r ($t);
echo "</pre>";
?>
