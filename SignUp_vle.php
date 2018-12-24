<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>Yathra</title>
<link rel="icon" href="Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet"  href="Tourism Template/css/foundation.min.css">
<link rel="stylesheet"  href="Tourism Template/css/superfish.css">
<link rel="stylesheet"  href="Tourism Template/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="Sweet Alerts/sweetalert.css">
<script src="Sweet Alerts/sweetalert.min.js"></script>
<script src="Tourism Template/js/vendor/custom.modernizr.js"></script>
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
  http.open("GET","GetAge.php?dob="+dob,true);
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
  http.open("GET","GetDistrict.php?state="+state,true);
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
  http.open("GET","GetState.php?c="+country,true);
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
  http.open("GET","GetUsername_tvl.php?uname="+uname,true);
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
<link rel="stylesheet"  href="Tourism Template/css/ie-fixes.css">
<![endif]-->
<style>
 .head_a
 {
 font-family:Verdana;
 }
</style>

</head>
<body>
<div class="header">
  <div class="row">
    <div class="columns large-12">
      <div class="row header-inner">
    <?php
	include"menu_header.php";
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
      <div class="columns large-12 content ">
        <h1 class="page-title">VLE  Registration</h1>
        <div>
          <h2 class="sub-title" style="font-family:Verdana">&nbsp;</h2>
        </div>
        <div class="row contact-form">
          <div class="columns large-8" style="font-family:Verdana">
            <form id="contact-form" method="post" action="" enctype="multipart/form-data">
			
			
			
			
			
			
            </form>
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
<script src="Tourism Template/js/jquery.min.js"></script>
<script src="Tourism Template/js/hoverIntent.js"></script>
<script src="Tourism Template/js/superfish.js"></script>
<script src="Tourism Template/Tourism Template/js/google-maps.js"></script>
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
 mysql_query("insert into traveller_tb values(0,'".$_POST['txtname']."','".$_POST['txtcmp']."','".$_POST['txtaddr']."','".$_POST['txtcity']."','".$_POST['txtzip']."','".$_POST['txtcountry']."','".$_POST['txtphno']."','".$_POST['txtemail']."','".$_POST['txtuname']."','".$_POST['txtpswd']."','".$_FILES['txtfile']['name']."','pending')")or die(mysql_error());
 if(mysql_affected_rows($con)>0)
 {
  move_uploaded_file($_FILES['txtfile']['tmp_name'],"Traveler/Photos/".$_FILES['txtfile']['name']);
  ?>
  <script type="text/javascript">
  swal("Success!", "Your Account Created Successfully!", "success");
  </script>
  <?php
  }
 }
?>