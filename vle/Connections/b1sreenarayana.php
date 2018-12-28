<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_b1sreenarayana = "127.0.0.1";
$database_b1sreenarayana = "mainrecord";
$username_b1sreenarayana = "root";
$password_b1sreenarayana = "";
$b1sreenarayana = mysql_pconnect($hostname_b1sreenarayana, $username_b1sreenarayana, $password_b1sreenarayana) or trigger_error(mysql_error(),E_USER_ERROR); 
?>