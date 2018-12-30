<?php
  session_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>akshaya</title>
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
        <h1 class="page-title">Sign In - Admin</h1>
        <div>
          <h2 class="sub-title" style="font-family:Verdana">Gateway of opportunities.......</h2>
        </div>
        <div class="row contact-form">
          <div class="columns large-8" style="font-family:Verdana">
            <form id="contact-form" method="post" action="">
			<table style="width:500px;">
			<tr>
			<td>
              <input type="text" name="txtuname" placeholder="Username:">
			  </td>
			  </tr>
			  <tr>
			  <td>
              <input type="password" name="txtpswd" placeholder="Password:">
			  </td>
			  </tr>
			  <tr>
			  <td>
              <input type="submit" class="button" name="btn" value="sign in">
			  </td>
			  </tr>
			  </table>
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
 include("connection.php");
 $q=mysql_query("select * from association where username='".$_POST['txtuname']."' and password='".$_POST['txtpswd']."'");
 if($a=mysql_fetch_array($q))
 {
 $_SESSION['id']=$a[0];
 $_SESSION['username']=$a['username'];
  
 ?>
 <script type="text/javascript">window.location.href="Admin/home.php";</script>
 <?php
  }
else
	  {
	  ?>
	  <script type="text/javascript">
	  sweetAlert({
				  title: "Error!",
				  text: "Invalid Username or Password!",
				  type: "error",
				  confirmButtonText: "Ok"
				});
</script>
	  <?php
	  }
 }
?>