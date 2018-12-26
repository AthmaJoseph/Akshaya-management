<?php
 include "connection.php";
 $uname=$_GET['uname'];
 $q=mysql_query("select * from vle where centercode like '$uname%'");
 if(mysql_num_rows($q)>0)
 {
 echo "This center code Already Exists";
 }
 else
 {
 echo "not";
 }
?>