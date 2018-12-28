<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_main = "127.0.0.1";
$database_main = "mainrecord";
$username_main = "root";
$password_main = "";
$main = mysql_pconnect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error(),E_USER_ERROR); 
?>