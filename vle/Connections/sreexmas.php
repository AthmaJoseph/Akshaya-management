<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sreexmas = "127.0.0.1";
$database_sreexmas = "mainrecord";
$username_sreexmas = "root";
$password_sreexmas = "";
$sreexmas = mysql_pconnect($hostname_sreexmas, $username_sreexmas, $password_sreexmas) or trigger_error(mysql_error(),E_USER_ERROR); 
?>