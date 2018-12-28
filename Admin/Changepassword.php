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
 function getAge(dob)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","../GetAge.php?dob="+dob,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
   document.getElementById("txtage").value=http.responseText;
  }
  }
 }
</script>
<script type="text/javascript">
 function getDistrict(state)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","../GetDistrict.php?state="+state,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
   document.getElementById("txtdistrict").innerHTML=http.responseText;
  }
  }
 }
</script>
<script type="text/javascript">
 function getState(country)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","../GetState.php?c="+country,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
   document.getElementById("txtstate").innerHTML=http.responseText;
  }
  }
 }
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
<div class="header"><?php
		 include("menu_header.php");
		?>
  <div class="row">
    <div class="columns large-12">
      <div class="row header-inner">
        

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
        <h1 class="page-title">Change Password</h1>
<br />
            <form id="contact-form" method="post" action="">
			<table style="width:500px;">
			<tr>
			<td>
              <input type="password" name="txtcpswd" placeholder="Current Password:" required >
			  </td>
			  </tr>
			  <tr>
			  <td>
              <input type="password" name="txtnpswd" placeholder="New Password:" required >
			  </td>
			  </tr>
			  <tr>
			  <td>
              <input type="password" name="txtvpswd" placeholder="Verify Password:" required >
			  </td>
			  </tr>
			  <tr>
			  <td>
              <input type="submit" class="button" name="btn" value="Save">
			  </td>
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
</body>
</html>
<?php

if(isset($_POST['btn']))
 {
  include "../connection.php";

 $q=mysql_query("select * from  association where id='".$_SESSION['id']."' and password='".$_POST['txtcpswd']."'");
 if($a=mysql_fetch_array($q))
 {
 if($_POST['txtnpswd']==$_POST['txtvpswd'])
 {
  mysql_query("update  association set password='".$_POST['txtnpswd']."' where id='".$_SESSION['id']."'");
  if(mysql_affected_rows($con)>0)
  {
  ?>
  <script type="text/javascript">
   swal({
  title: "Success",
  text: "Password Changed Successfully",
  type: "success"
  },
  function(){
  window.location.href='Changepassword.php';
  });
  </script>
  <?php
  }
 
 }
  else
  {
  ?>
  <script type="text/javascript">
   swal({
  title: "Error",
  text: "Mismatching   Password",
  type: "error"
  },
  function(){
  window.location.href='Changepassword.php';
  });
  </script>
  <?php
  }
 }
  else
  {
  ?>
  <script type="text/javascript">
     swal("Error","Please check your current Password","error");
   swal({
  title: "Error",
  text: "Please check your current Password",
  type: "error"
  },
  function(){
  window.location.href='Changepassword.php';
  });
  </script>
  <?php
  }
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