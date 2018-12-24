<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>Yathra</title>
<link rel="icon" href="Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="Tourism Template/css/superfish.css">
<link rel="stylesheet" href="Tourism Template/css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="Tourism Template/Tourism Template/js/vendor/custom.modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="Sweet Alerts/sweetalert.css">
<script src="Sweet Alerts/sweetalert.min.js"></script>
<link href="Tourism Template/css/comment.css" type="text/css" rel="stylesheet">
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
      <div class="columns large-4 content sidebar">
        <h1 class="sub-title">Frequently Asked Questions</h1>
		  <ul>
		<?php
		include("connection.php");
		$q=mysql_query("select * from enquiry_tb where reply!=''  order by date desc  limit 5");
		while($a=mysql_fetch_array($q))
		{
        ?>
          <li class="bullet" style="font-size:26px; text-align:left"><a href="Enquiry_&_reply.php?id=<?php echo $a[0];?>" class="a"><?php echo $a['question'];?></a></li>
		 <?php
		}
		?>
        </ul>
		<a href="Enquiry_&_reply.php" >Read More</a>
      </div>
      <div class="columns large-8">
        <h1 class="page-title">Contact Us</h1>
        <h6>Welcome! How may we help you?</h6>
        <div class="row contact-form">
          <div class="columns large-8">
            <form id="contact-form" method="post">
			<table style="width:100%">
			<tr>
			<td>
              <input type="text" name="name" placeholder="Name:" required >
			  </td>
			  </tr>
			<tr>
			<td>
              <input type="text" name="email" placeholder="Email:" required >
			 </td>
			 </tr>
			<tr>
			<td>
              <input type="text" name="subject" placeholder="Subject:" required >
			 </td>
			 </tr>
			<tr>
			<td>
              <textarea  name="message" required ></textarea>
			  </td>
			  </tr>
			<tr>
			<td>
              <input type="submit" class="button" name="btn" value="send">
			  </td>
			  </tr>
			  </table>
            </form>
          </div>
          
        </div>
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
mysql_query("insert into enquiry_tb values(0,'".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','','".date("Y-m-d")."')")or die(mysql_error());
  ?>
  <script type="text/javascript">
  swal("Success!", "Your Message Send Successfully!", "success");
  </script>
  <?php
}
?>