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
        <h1>Akshaya - Gateway of Opportunities</h1>
        <p> Akshaya has to surpass many challenges, everyone who respect its potential is keen to seek something innovative. Akshaya, an ambitious endeavor of the State of Kerala was inaugurated by Dr. APJ Abdul Kalam, on November 18, 2002. The Government’s focus on digitization of the State has entailed a revolution in the design and operation of public services through the reinvention of service delivery channels. Emergence of digital organizations to create services led to better opportunities to meet citizens’ needs directing to increased social inclusion.</p>
      </div>
    </div>
  </div>
</div>
<div class="service-box">
  <div class="row service">
    <div class="columns large-4">
      <h1 class="service-subtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MISSION</h1>
      <p><img src="Slider Images/mission.jpg"  alt="" width="500" height="500" class="threeUp" style="width:400px; height:250px"></p>
      <p align="justify"> To bridge the gap between the ‘Information Rich and the Information Poor’.

 

Transformation of Governance to provide efficient, transparent and convenient services to the Citizens through Information & Communication Technologies.

 

Improving public service delivery by making services accessible to 'the common man' in her/his locality.

 

To improve e-literacy in underserved areas and to provide a platform for Government to citizen services through a public-private partnership.</p>
      <p>&nbsp; </p>
    </div>
    <div class="columns large-4">
      <h1 class="service-subtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VISION</h1>
      <p><img src="Slider%20Images/mission-2.jpg" alt="" width="400" height="213" class="threeUp" style="width:400px; height:250px" ></p>
      <p align="justify">&nbsp; Achieving 100% digital and social inclusion by ‘Connecting the Unconnected’.
 
To improve services at the base of the delivery chain.
 
Building collaborative relationships with citizens and other communities.
 
Restructuring the programs so as to leverage the assets of Government to enhance the mission productivity.
 
Disseminating information to improvepublic communication and to encourage a shared understanding of public issues.
 
To promote and strengthen entrepreneurship through digital interventions.</p>
      <p> <br>
      </p>
    </div>
    <div class="columns large-4">
      <h1 class="service-subtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJECTIVE</h1>
      <p><img src="Slider%20Images/mission-3.jpg" alt="" width="700" height="600" class="threeUp" style="width:400px; height:250px"></p>
      <p align="justify">To harness ICT in order to build and better services finally transforming the relationship between government and state.
 
 
To understand current and future demand for digital skills in the economy; to understand the routes to bridge the gap by identifying the risks and opportunities in addressing digital skills.
 
 
 
To ensure that the government achieves its delivery priorities, across the key areas of public service.&nbsp;</p>
      <p align="justify"><br><br> 
        </p>
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
              <div class="columns large-3"> <img src="Slider Images/9.jpg" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>AKSHAYA Gateway to Opportunities</h1>
                <p> Akshaya, an innovative project implemented in the State of Kerala aimed at bridging the digital divide, addresses the issues of ICT access, basic skill sets and availability of relevant content.</p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name"></span><span class="profession"> </span></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="columns large-3"> <img src="Slider Images/10.png" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>AKSHAYA Gateway to Opportunities</h1>
                <p> An innovative project implemented in the State of Kerala aimed at bridging the digital divide, addresses the issues of ICT access, basic skill sets and availability of relevant. </p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name"></span><span class="profession"> </span></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="columns large-3"> <img src="Slider Images/11.jpg" alt="" class="test-img"> </div>
              <div class="columns large-9">
                <h1>AKSHAYA Gateway to Opportunities</h1>
                <p> Akshaya, an innovative project implemented in the State of Kerala aimed at bridging the digital divide, addresses the issues of ICT access, basic skill sets and availability of relevant content.</p>
                <div class="row">
                  <div class="columns large-12">
                    <p class="test-credit"><span class="name"></span><span class="profession"> </span></p>
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