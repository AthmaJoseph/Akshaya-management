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
<script src="Tourism Template/js/vendor/custom.modernizr.js"></script>
<link href="Tourism Template/css/comment.css" type="text/css" rel="stylesheet" />
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<script type="text/javascript">
function toggle(cls) {
    var x = document.getElementById(cls);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 70%;
	border:#999999 thin solid;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>
<!--[if lt IE 9]>
<link rel="stylesheet" href="../Tourism Template/css//ie-fixes.css">
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
	<div class="container bootstrap snippet">
    <div class="row">
		<div class="col-md-12">
		    <div class="blog-comment">
				<h3 class="text-success">Frequently Asked Question & Answers</h3>
                <hr/>
          <?php
		   include("connection.php");
		   if(isset($_GET['id']))
		   {
		   $q=mysql_query("select * from enquiry_tb where id='".$_GET['id']."'")or die(mysql_error());
		   }
		   else
		   {
		   $q=mysql_query("select * from enquiry_tb where reply!=''")or die(mysql_error());
		   }
		   if(mysql_num_rows($q)>0)
		   {
		   ?>

				<ul class="comments">

		   <?php
		    while($a=mysql_fetch_array($q))
			{
			$date=strtotime($a['date']);
			?>
<li class="clearfix">
				  <img src="Tourism Template/images/q-and-a-icon-21627.png" class="avatar" alt="">
				  <div class="post-comments">
				      <p class="meta"><?php echo date("M",$date);?> <?php echo date("d",$date);?>, <?php echo date("Y",$date);?> <label onClick="toggle('<?php echo $class;?>')" class="a"><?php echo $a['name'];?></label> says : <i class="pull-right"></i></p>
				      <p style="font-size:18px">
				          <?php
						   echo $a['question'];
						   ?>
				      </p>
				  </div>
				
				  <ul class="comments">
				      <li class="clearfix">
				          <img src="Tourism Template/images/Arrow-PNG.png" class="avatar" alt="">
				          <div class="post-comments">
				              <p class="meta">Admin Reply : <i class="pull-right"><a href="#"></a></i></p>
				             <p style="font-size:18px">
				                  <?php
								  echo $a['reply'];
								  ?>
				              </p>
				          </div>
				      </li>
				  </ul>
				</li>

			<?php
			$class++;
			}
?>
				
				</ul>

<?php
		   }
		   if(isset($_GET['id']))
		   {
		   ?>
		   <a href="Enquiry_&_reply.php">Read More</a>
		   <?php
           }
		  ?> 
		  
		  			</div>
		</div>
	</div>
</div>
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
<br><br><br><br><br><br><br><br>
<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2045 All rights reserved by <a href="#">Calisto.</a> Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></div>
    <div class="columns large-1"> <img src="Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="Tourism Template/js/jquery.min.js"></script>
<script src="Tourism Template/js/hoverIntent.js"></script>
<script src="Tourism Template/js/superfish.js"></script>
<script src="Tourism Template/js/google-maps.js"></script>
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
