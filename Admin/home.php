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
<title>Akshaya</title>
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
        <h3 class="page-title"><u>Akshaya - Gateway of Opportunities</u></h3>
        <div>
          <h2 align="justify" class="sub-title">Akshaya, an innovative project implemented in the State of Kerala aimed at bridging the digital divide, addresses the issues of ICT access, basic skill sets and availability of relevant content.</h2>
        </div>
		<h6>AKSHAYA CENTERS</h6>
        <ul class="row">
		<?php
		include("../connection.php");
		$q=mysql_query("select * from vle where status='Approve' limit 3");
		while($a=mysql_fetch_array($q))
		{
		?>
		
          <li class="columns large-4 about-list">
            <div class="img-wrapper">
              <p><img src="../akshaya/Photos/<?php echo $a['photo'];?>" alt="" class="th about-image" style="height:200px; width:170px"> 
            </div>
            </p>
            <h3 class="employer-name"><?php echo $a['name'];?></h3>
            <p><?php echo $a['center_location'];?> <br>
			<?php echo $a['panchayath'];?><br><?php echo $a['district'];?> ( <?php echo $a['phone'];?>)<br>
			<img src="../Tourism Template/images/email.png"><?php echo $a['email'];?><br>
			<img src="../Tourism Template/images/phone.png"><?php echo $a['mobile'];?><br>
			</p>
          </li>
        <?php
		}
		?>
        </ul>
		<a href="vle_approved.php" style="float:right" class="a">Read More</a>
      </div>
      <div class="columns sidebar large-4 large-offset-1">
        <h1 class="page-title"> Other Operations </h1>
        <ul >
          <li> <a href="vle_approved.php"  style="font-size:18px">View VLE details</a> </li>
          <li> <a href="Bus_details.php" style="font-size:18px">Black List</a> </li>
          <li> <a href="" style="font-size:18px">Message</a> </li>
		  <li> <a href="Changepassword.php" style="font-size:18px">Change Password</a> </li>
          <li> <a href="Enquiry.php" style="font-size:18px">Online Enquires</a> </li>
         
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