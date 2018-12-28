<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_empmain = "127.0.0.1";
$database_empmain = "mainrecord";
$username_empmain = "root";
$password_empmain = "";
$empmain = mysql_pconnect($hostname_empmain, $username_empmain, $password_empmain) or trigger_error(mysql_error(),E_USER_ERROR); 
?>