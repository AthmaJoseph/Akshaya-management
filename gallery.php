<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>akshaya</title>
<link rel="icon" href="Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="Tourism Template/css/superfish.css">
<link rel="stylesheet" href="Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="Tourism Template/js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<style type="text/css">
.border
{
 height:200px;
 width:400px;
 float:left;
 padding:5px;
 margin:2px;
}
.style2 {color: #FFFFFF}
.style3 {
	color: #0000FF;
	font-size: 2em;
}
</style>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
</head>
<body>
<span class="style2"></span>
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
      <div class="columns large-12 content">
        <h1 class="page-title"><center class="style3">Gallery</center>
        </h1>
        <div class="thumbnail-block">
          <ul class="large-block-grid-4">
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/1.jpg"><img src="Slider Images/1.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/2.gif"><img src="Slider Images/2.gif" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/3.jpg"><img src="Slider Images/3.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/4.jpg"><img src="Slider Images/4.jpg" alt=""  class="border"></a></li>
          </ul>
        </div>
        <div class="thumbnail-block">
          <ul class="large-block-grid-4">
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/5.jpg"><img src="Slider Images/5.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/6.jpg"><img src="Slider Images/6.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/7.jpg"><img src="Slider Images/7.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/8.png"><img src="Slider Images/8.png" alt=""  class="border"></a></li>
			            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/9.jpg"><img src="Slider Images/9.jpg" alt=""  class="border"></a></li>
            <li style="list-style-type:none"><a class="thumbnail" href="Slider Images/10.jpg"><img src="Slider Images/10.jpg" alt=""  class="border"></a></li>

          </ul>
        </div>
        <div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2045 All rights reserved by <a href="#">akshaya</a> Design by: <a href="http://topwebsitetemplates.org"></a></div>
    <div class="columns large-1"> <img src="Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="Tourism Template/js/jquery.min.js"></script>
<script src="Tourism Template/js/hoverIntent.js"></script>
<script src="Tourism Template/js/superfish.js"></script>
<script src="Tourism Template/js/colorbox/jquery.colorbox-min.js"></script>
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
    $(".thumbnail").colorbox({
        rel: "thumbnail",
        transition: "fade",
        width: "50%",
        height: "50%"
    });
});
</script>
</body>
</html>