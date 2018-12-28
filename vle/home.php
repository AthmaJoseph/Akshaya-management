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
<title>akshaya</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css/superfish.css">
<link rel="stylesheet" href="../Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="../Tourism Template/js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../Tourism Template/js/slider/flexslider.css">
<link rel="stylesheet" href="../Tourism Template/js/slider/flexcar.css">

<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: '../Tourism Template/css/ie8-grid-foundation-4.css'
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="../Tourism Template/css/ie-fixes.css">
<![endif]-->
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
      <div class="columns large-12 content" style="width:600px">
       <div class="slider">
    <div class="row">
      <div class="columns large-12" >
        <div class="row flexslider-row" >
          <div class="columns large-12" >
            <div class="flexslider" >
              <ul class="slides">
			  <?php
			  include("sliderimages.php");
			  ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
	<div class="columns sidebar large-4 large-offset-1">
        <h1 class="page-title"> Other Operations </h1>
        <ul >
		  <li> <a href="Add_staff.php"  style="font-size:18px">New Registration</a> </li>
          <li> <a href="message.php"  style="font-size:18px">Message</a> </li>
          <li> <a href="Passenger_details.php" style="font-size:18px">Black List</a> </li>
		   <li><a href="Editprofile.php"  style="font-size:18px">Edit Profile</a></li>
           <li><a href="Changepassword.php" style="font-size:18px">Change Password</a></li>
           <li><a href="../Logout.php" style="font-size:18px" >Logout</a></li>
        </ul>
      </div>
      </div>
	  
    </div>
	
  </div>
</div>

<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2045 All rights reserved by <a href="#">Calisto.</a> Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></div>
    <div class="columns large-1"> <img src="../Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="../Tourism Template/js/jquery.min.js"></script>
<script src="../Tourism Template/js/hoverIntent.js"></script>
<script src="../Tourism Template/js/superfish.js"></script>
<script src="../Tourism Template/js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: '../Tourism Template/js/placeholder.min.js'
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
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>
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