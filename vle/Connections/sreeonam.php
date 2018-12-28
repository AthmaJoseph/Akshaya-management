<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sreeonam = "127.0.0.1";
$database_sreeonam = "mainrecord";
$username_sreeonam = "root";
$password_sreeonam = "";
$sreeonam = mysql_pconnect($hostname_sreeonam, $username_sreeonam, $password_sreeonam) or trigger_error(mysql_error(),E_USER_ERROR); 
?>