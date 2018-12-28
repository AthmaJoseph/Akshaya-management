<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sreeanual = "127.0.0.1";
$database_sreeanual = "mainrecord";
$username_sreeanual = "root";
$password_sreeanual = "";
$sreeanual = mysql_pconnect($hostname_sreeanual, $username_sreeanual, $password_sreeanual) or trigger_error(mysql_error(),E_USER_ERROR); 
?>