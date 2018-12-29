<html>
<head>
<link rel="stylesheet" type="text/css" href="../Sweet Alerts/sweetalert.css">
<script src="../Sweet Alerts/sweetalert.min.js"></script>
</head>
<body>
<?php
include("../connection.php");
$q=mysql_query("delete from bus_tb where id='".$_GET['id']."'");
?>
  <script type="text/javascript">
   swal({
  title: "Success",
  text: "Deleted Successfully",
  type: "success"
  },
  function(){
window.location.href="View_Bus.php";
  });
</script>
</body>