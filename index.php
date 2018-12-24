<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>akshaya</title>
<meta charset="utf-8">
<link rel="stylesheet" href="Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="Tourism Template/css/superfish.css">
<link rel="stylesheet" href="Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="Tourism Template/js/slider/flexslider.css">
<link rel="stylesheet" href="Tourism Template/js/slider/flexcar.css">
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
<link rel="stylesheet" href="Tourism Template/css/ie-fixes.css">
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
  <div class="slider">
    <div class="row">
      <div class="columns large-12">
        <div class="row flexslider-row">
          <div class="columns large-12">
            <div class="flexslider">
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
<div class="tagline">
  <div class="row">
    <div class="columns large-12">
      <div class="center">
        <h1>WELCOME TO GOD'S OWN COUNTRY</h1>
        <p> You are now at the threshold of Kerala, God's Own Country. This gateway provides you with information, pictures and videos of mystical destinations spread out across the vast expanse of this beautiful state. A culture and heritage that has thrived since ancient times is available at your fingertips to explore and soak in.</p>
      </div>
    </div>
  </div>
</div>
<div class="service-box">
  <div class="row service">
    <div class="columns large-4">
      <h1 class="service-subtitle">Parambikulam</h1>
      <p><img src="Slider Images/Parambikkulam-Palakkad-6.jpg" style="width:400px; height:155px"  alt="" class="threeUp"></p>
      <p> Parambikulam Tiger Reserve is situated in Chittur taluk of Palakkad district and is about 100 km away from Palakkad. The challenging hill ranges here are placed at an altitude of 300 to 1438 m above sea level and the place offers a good climate with temperatures ranging from 15 degree Celsius to 32 degree Celsius. Sprawling over an area of 285 sq km, Parambikulam can boast of the first scientifically managed teak plantations of the world and also houses the world's tallest and oldest teak tree.</p>
      <p> <a class="button custom">details</a> </p>
    </div>
    <div class="columns large-4">
      <h1 class="service-subtitle">Nelliyampathy hills</h1>
      <p><img src="Slider Images/Nelliyampathy hills.jpg" alt="" class="threeUp"></p>
      <p> From the town of Nenmara in Palakkad district, the cloud-caressed peaks of the majestic Nelliyampathy Hill ranges are a sight to behold. The height of the hills ranges from approximately 467 m to 1572 m and it has an extremely calming effect on all who view it. To reach Nelliyampathy, one has to take the road starting from Nenmara that proceeds to the Pothundy Dam. </p>
      <p> <br><br><a class="button custom">details</a> </p>
    </div>
    <div class="columns large-4">
      <h1 class="service-subtitle">Bekal</h1>
      <p><img src="Slider Images/bekal-fort-kerala-kasargode.jpg" alt="" style="width:400px; height:155px" class="threeUp"></p>
      <p>In Kasargod district of Kerala, locates a place called Bekal with beauty engraved all over. The Bekal Fort enhanced with the Arabian Sea is definitely one of the most significant tourist attractions. In Kerala, Bekal Fort is the best preserved and the largest among its kind. This giant keyhole shape fort with the excellence of the sea surrounding it, greenery view from the top of the fort and the cool breeze sets an exotic feel. </p>
      <p><br><br> <a class="button custom">details</a> </p>
    </div>
  </div>
</div>
<div class="front-testimonial">
  <div class="row">
    <div class="columns large-12">
      <div class="flexcar">
        <ul class="slides">
          <li>
            <div class="row">
              <div class="columns large-3"> <img src="Slider Images/cherai_beach_kochi.jpg" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>KeralaTourism is Live & Trending</h1>
                <p> Cherai Beach, a picturesque beach, located on the north-end of the Vypeen Island is ideal for swimming.Thick coconut groves and Chinese fishing nets on the waterfront are added attractions.</p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name">Cherai Beach,</span><span class="profession"> Kochi</span></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="columns large-3"> <img src="Slider Images/athirappalli_and_vazhachal_waterfalls_thrissur.jpg" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>KeralaTourism is Live & Trending</h1>
                <p> The most famous waterfalls of Kerala, Athirappalli and Vazhachal are situated on the Chalakudy River, which originates from the upper reaches of the Western Ghats. </p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name">Athirappalli & Vazhachal Waterfalls</span><span class="profession"> Thrissur</span></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="columns large-3"> <img src="Slider Images/ambalavayal_heritage_museum_wayanad.jpg" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>KeralaTourism is Live & Trending</h1>
                <p> The Ambalavayal Heritage Museum, the archaeological museum in Wayanad, has one of Kerala's largest collections of the remnants of an era dating back to the 2nd century A.D. </p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name">Ambalavayal Heritage Museum</span><span class="profession"> Wayanad</span></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="test-nav"> <span class="leftarrow"><img src="Tourism Template/images/leftarrow.png" alt=""></span><span class="rightarrow"><img src="Tourism Template/images/rightarrow.png" alt=""></span> </div>
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
<script src="Tourism Template/js/slider/jquery.flexslider.js"></script>
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
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>
</body>
</html>