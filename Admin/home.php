<?php
 session_start();
 if(isset($_SESSION['username']))
 {
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Yathra</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<link rel="stylesheet" href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css/superfish.css">
<link rel="stylesheet" href="../Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="../Tourism Template/js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<link  href="../Tourism Template/css/comment.css" rel="stylesheet" type="text/css">
<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
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
      <div class="row header-inner" style="width:1200px">
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
        <h1 class="page-title">Yathra</h1>
        <div>
          <h2 class="sub-title">Yathra is India’s leading platform to serve clients with exciting Tour Packages as per their interest with great deals.</h2>
        </div>
		<h6>Our Travel Agencies</h6>
        <ul class="row">
		<?php
		include("../connection.php");
		$q=mysql_query("select * from traveller_tb where status='Approve' limit 3");
		while($a=mysql_fetch_array($q))
		{
		?>
		
          <li class="columns large-4 about-list">
            <div class="img-wrapper">
              <p><img src="../Traveler/Photos/<?php echo $a['photo'];?>" alt="" class="th about-image" style="height:200px; width:170px"> 
            </div>
            </p>
            <h3 class="employer-name"><?php echo $a['name'];?></h3>
            <p><?php echo $a['company'];?> [ Company ]<br>
			<?php echo $a['address'];?><br><?php echo $a['city'];?> ( <?php echo $a['zip'];?>)<br>
			<img src="../Tourism Template/images/email.png"><?php echo $a['email'];?><br>
			<img src="../Tourism Template/images/phone.png"><?php echo $a['mob'];?><br>
			</p>
          </li>
        <?php
		}
		?>
        </ul>
		<a href="Traveler_approved.php" style="float:right" class="a">Read More</a>
      </div>
      <div class="columns sidebar large-4 large-offset-1">
        <h1 class="page-title"> Other Operations </h1>
        <ul >
          <li> <a href="Customers_approved.php"  style="font-size:18px">Customers</a> </li>
          <li> <a href="Bus_details.php" style="font-size:18px">Bus Details</a> </li>
          <li> <a href="Passenger_details.php" style="font-size:18px">Passenger Details</a> </li>
          <li> <a href="Enquiry.php" style="font-size:18px">Online Enquires</a> </li>
          <li> <a href="Packege_approved.php" style="font-size:18px">Feedback</a> </li>
           <li><a href="../Logout.php" style="font-size:18px" >Logout</a></li>
        </ul>
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
}
else
{
?>
<script type="text/javascript">
window.location.href="../SignIn.php";
</script>
<?php
}
?>