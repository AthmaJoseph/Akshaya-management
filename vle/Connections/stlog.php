<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_stlog = "127.0.0.1";
$database_stlog = "mainrecord";
$username_stlog = "root";
$password_stlog = "";
$stlog = mysql_pconnect($hostname_stlog, $username_stlog, $password_stlog) or trigger_error(mysql_error(),E_USER_ERROR); 
?>