<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_teachlog = "127.0.0.1";
$database_teachlog = "mainrecord";
$username_teachlog = "root";
$password_teachlog = "";
$teachlog = mysql_pconnect($hostname_teachlog, $username_teachlog, $password_teachlog) or trigger_error(mysql_error(),E_USER_ERROR); 
?>