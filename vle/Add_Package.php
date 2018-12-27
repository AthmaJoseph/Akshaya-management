<?php
 session_start();
 if(isset($_SESSION['id']))
 {
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>Yathra</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css/superfish.css">
<link rel="stylesheet" href="../Tourism Template/css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="../Sweet Alerts/sweetalert.css">
<script src="../Sweet Alerts/sweetalert.min.js"></script>
<script src="../Tourism Template/js/jquery.min.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<script type="text/javascript">
 function getPackageCatgry(type)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","GetCategory.php?type="+type,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
   document.getElementById("txtcat").innerHTML=http.responseText;
  }
  }
 }
</script>

<script type="text/javascript">
 $(document).ready(function(){
 $("#add").click(function(){
 var con="<tr><td ><input type='text' name='txtplace[]' placeholder='Place:' style='width:450px;' /></td></tr>";
$("#newtb").append(con);

 });
 });
</script>

<!--[if lt IE 9]>
<link rel="stylesheet" href="../Tourism Template/css//ie-fixes.css">
<![endif]-->
</head>
<body>
<div class="header">
  <div class="row">
    <div class="columns large-12">
      <div class="row header-inner">
        <?php
		 include("menu_header.php");
		?>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns large-12 small-top-menu">
      <div class="row">
        <div class="columns large-12 plr0 top-nav">
          <form name="dropdown" class="dropdown" action="#">
            <nav>
              <section>
                <select name="selected" id="target" accesskey="E" onChange="goToNewPage(document.dropdown.selected)">
                  <option value="index.html">home</option>
                  <option value="about.html">about us</option>
                  <option value="blog.html">blog</option>
                  <option value="gallery.html">gallery</option>
                  <option value="services.html">services</option>
                  <option value="contact.html">contact us</option>
                </select>
              </section>
            </nav>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-7 content">
        <h1 class="page-title">Package Details</h1>
<br />
            <form id="contact-form" enctype="multipart/form-data" method="post" action="">
			<table style="width:500px;">
						<tr>
			<td >
              Name
			  <td >
              <input type="text" name="txtname" id="txtname" placeholder="Name:" required ></td>
			            
			  </tr>
			  
			
			  </table>
            </form>
<br /><br />
<br />
<br />
<br />

 
		  </div>          
		   <div class="columns large-4">
            <div id="map_canvas"></div>
            
          </div>
        </div>
      </div>
      <div class="row collapse">
        <div class="columns large-12"> </div>
      </div>
    </div>
  </div>
</div>

<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2045 All rights reserved by <a href="#">Calisto.</a> Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></div>
    <div class="columns large-1"> <img src="Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="../Tourism Template/js/jquery.min.js"></script>
<script src="../Tourism Template/js/hoverIntent.js"></script>
<script src="../Tourism Template/js/superfish.js"></script>
<script src="../Tourism Template/Tourism Template/js/google-maps.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
});
</script>

<?php

if(isset($_POST['btn']))
 {
  include "../connection.php";
 $place=implode(",",$_POST['txtplace']);
  mysql_query("insert into package_tb values(0,'".$_SESSION['id']."','".$_POST['type']."','".$_POST['txtcat']."','$place','".$_POST['txtdes']."','".$_POST['txtdays']."','".$_POST['txtamount']."','pending')")or die(mysql_error());
  if(mysql_affected_rows($con)>0)
  {
  $qq=mysql_query("select max(id) from package_tb");
  $max=mysql_fetch_array($qq);
	for($i=0; $i<count($_FILES['txtfile']['name']); $i++)
	 {
	  mysql_query("insert into place_images values(0,'".$max[0]."','".$_FILES['txtfile']['name'][$i]."')")or die(mysql_error());
	 move_uploaded_file($_FILES['txtfile']['tmp_name'][$i],"Place/".$_FILES['txtfile']['name'][$i]);
	 }
  ?>
  <script type="text/javascript">
   swal({
  title: "Success",
  text: "Package Category  Added Successfully",
  type: "success"
  },
  function(){
  window.location.href='Add_Package.php';
  });
  </script>
  <?php
  }
 
 }
 
?>
</body>
</html>
<?php


}
else
{
?>
<script type="text/javascript">
window.location.href='../index.php';
</script>
<?php
}
?>