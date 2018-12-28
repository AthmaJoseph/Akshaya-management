<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_TEST = "127.0.0.1";
$database_TEST = "mainrecord";
$username_TEST = "root";
$password_TEST = "";
$TEST = mysql_pconnect($hostname_TEST, $username_TEST, $password_TEST) or trigger_error(mysql_error(),E_USER_ERROR); 
?>