<?php
include ("open_ils_login.php");
$auth_response = open_ils_login('username', 'password');
echo "<pre>";
print_r ($auth_response);
echo "</pre>";
?>