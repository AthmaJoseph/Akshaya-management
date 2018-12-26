<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sign = "localhost";
$database_sign = "akshaya";
$username_sign = "root";
$password_sign = "";
$sign = mysql_pconnect($hostname_sign, $username_sign, $password_sign) or trigger_error(mysql_error(),E_USER_ERROR); 
?>