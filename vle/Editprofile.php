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

<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>


<script type="text/javascript">
 function prev(event)
 {
  var src=URL.createObjectURL(event.target.files[0]);
   document.getElementById("pre").innerHTML="<img src="+src+" height=100 width=100>";
 }
</script>
<script type="text/javascript">
 function checkUsername(uname)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","GetUsername_edit.php?uname="+uname,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
  if(http.responseText=="This Username Already Exists")
  {
   document.getElementById("txtu").innerHTML="<font color='red'>"+http.responseText+"</font>";
   document.getElementById("btn").disabled="true";
   }
   else
   {
   document.getElementById("txtu").innerHTML="";
   document.getElementById("btn").disabled="";
   }
  }
  }
 }
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
        <h1 class="page-title">Edit Profile</h1>
<br />
          <?php
		   include("../connection.php");
		   $q=mysql_query("select * from vle where id='".$_SESSION['id']."'");
		   if($a=mysql_fetch_array($q))
		   {
		   ?>
            <form id="contact-form" method="post" action="" enctype="multipart/form-data">
			<table style="width:500px">
			<caption><img src="photo/Photos/<?php echo $a['photo'];?>" height="100" width="100" /></caption>
			<tr>
			<td>Name</td>
			<td><input type="text" value="<?php echo $a['name'];?>" name="txtname"  /></td></tr>
			<tr>  <td>Center Code</td>
			<td> <input type="text" name="txtcentercode" value="<?php echo $a['centercode'];?>" required ></td>
			  </tr>
			  			<tr>
			<td >Email</td>
			<td> <input type="email" name="txtemail" value="<?php echo $a['email'];?>" required></td>
			
			</tr><tr><td>Photo</td><td>          <input type="file" name="txtfile"  onChange="prev(event)"> <div id="pre"></div></td></tr>
			<tr>
			  <td>Phone Number</td>
			<td> <input type="text" name="txtphone" value="<?php echo $a['phone'];?>" required  /></td>
			<tr><td>Mobile Number</td>
			<td> <input type="text" name="txtmobile" value="<?php echo $a['mobile'];?>" required ></td>
			</tr>
			<tr>
			  <td></td>
			

			  <tr>
			  <td colspan="4" align="center"><input type="submit" class="button" name="btn1" id="btn" value="Edit" /></td>
			  </tr>
			  </table>
            </form>
		   <?php
		   }
		  ?> 
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
</body>
</html>
<?php




if(isset($_POST['btn1']))
{
	if(is_uploaded_file($_FILES['txtfile']['tmp_name']))
	{
		mysql_query("update vle set name='".$_POST['txtname']."',centercode='".$_POST['txtcentercode']."',email='".$_POST['txtemail']."',phone='".$_POST['txtphone']."',mobile='".$_POST['txtmobile']."',photo='".$_FILES['txtfile']['name']."' where id='".$_SESSION['id']."'");
		  move_uploaded_file($_FILES['txtfile']['tmp_name'],"photo/Photos/".$_FILES['txtfile']['name']);
											
	}
	else
	{
		mysql_query("update vle set name='".$_POST['txtname']."',centercode='".$_POST['txtcentercode']."',email='".$_POST['txtemail']."',phone='".$_POST['txtphone']."',mobile='".$_POST['txtmobile']."' where id='".$_SESSION['id']."'");
	}
	$_SESSION['centercode']=$_POST['txtcentercode'];
  ?>
 <script type="text/javascript">
 swal({
  title: "Success",
  text: "Your Profile Updated Successfully",
  type: "success"
  },
  function(){
  window.location.href='Editprofile.php';
  });
 </script>
  <?php

}


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