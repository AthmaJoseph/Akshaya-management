<?php
# FileName="Connection_php_mysql.html"
# Type="MYSQL"
# HTTP="true"
$hostname_admin = "127.0.0.1";
$database_admin = "mainrecord";
$username_admin = "root";
$password_admin = "";
$admin = mysql_pconnect($hostname_admin, $username_admin, $password_admin) or trigger_error(mysql_error(),E_USER_ERROR); 
?>