<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_feepayment = "127.0.0.1";
$database_feepayment = "mainrecord";
$username_feepayment = "root";
$password_feepayment = "";
$feepayment = mysql_pconnect($hostname_feepayment, $username_feepayment, $password_feepayment) or trigger_error(mysql_error(),E_USER_ERROR); 
?>