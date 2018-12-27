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
<title>Yathra</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../Tourism Template/css//foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css//superfish.css">
<link rel="stylesheet" href="../Tourism Template/css//stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="../Sweet Alerts/sweetalert.css">
<script src="../Sweet Alerts/sweetalert.min.js"></script>

<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
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
  <h1 class="page-title">Approve or Reject VLE</h1>
<br />
          <?php
		   include("../connection.php");
		   $q1=mysql_query("select * from vle where id='".$_GET['id']."'");
		   if($a1=mysql_fetch_array($q1))
		   {
		   ?>
            <form id="contact-form" method="post" action="" enctype="multipart/form-data">
			<table style="width:700px">
			<caption><img src="../akshaya/Photos/<?php echo $a1['photo'];?>" height="100" width="100" /></caption>
			<tr>
			<td>Name</td>
			<td><input type="text" readonly="readonly"  value="<?php echo $a1['name'];?>" name="txtname"  /></td>
			  <td>Center Code</td>
			<td> <input type="text" readonly="readonly"  value="<?php echo $a1['centercode'];?>" required ></td>
			  </tr>
			  			<tr>
			<td >Center Location</td>
			<td   colspan="3"> <textarea name="txtaddr" readonly="readonly" ><?php echo $a1['centerlocation'];?></textarea></td>
			</tr>
			<tr>
			  <td>Landmark</td>
			<td> <input type="text" readonly="readonly"  value="<?php echo $a1['landmark'];?>" required  /></td>
			<td>Panchayath</td>
			<td> <input type="text" readonly="readonly"  value="<?php echo $a1['panchayath'];?>" required ></td>
			</tr>
			<tr>
			  <td>District</td>
			<td><input type="text" readonly="readonly"  value="<?php echo $a1['district'];?>" readonly="readonly" />			  </td >

			<td>Email Id</td>
			<td><input type="text" value="<?php echo $a1['email'];?>"  readonly="readonly"  /></td>
			</tr>
			<tr>
			  <td>Mobile</td>
			<td><input type="text" value="<?php echo $a1['mobile'];?>" readonly="readonly"  name="txtphno"  /></td>
              </tr>
             
			  <tr>
			  <td colspan="4" style="text-align:center"><input type="submit" class="button" name="btn1" value="Approve" />
			  <input type="submit" class="button" name="btn2" value="Reject" /></td>
			  </tr>
              </table>
            </form>
		   <?php
		   }
		  ?> 
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
    <div class="columns large-1"> <img src="../Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="../Tourism Template/js/jquery.min.js"></script>
<script src="../Tourism Template/js/hoverIntent.js"></script>
<script src="../Tourism Template/js/superfish.js"></script>
<script src="../Tourism Template/Tourism Template/js/google-maps.js"></script>
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
 if(isset($_POST['btn1']))
 {
 mysql_query("update vle set status='Approve' where id='".$_GET['id']."'")or die(mysql_error());
 ?>
 <script type="text/javascript">
 swal({
  title: "Approved",
  text: " ",
  type: "success"
  },
  function(){
  window.location.href='vle_pending.php';
  });
 </script>
 <?php
 }

 if(isset($_POST['btn2']))
 {
 mysql_query("update vle set status='Reject' where id='".$_GET['id']."'")or die(mysql_error());
 ?>
 <script type="text/javascript">
 swal({
  title: "Rejected",
  text: " ",
  type: "success"
  },
  function(){
  window.location.href='vle_pending.php';
  });
 </script>
 <?php
 }




}
else
{
?>
<script type="text/ecmascript">
window.location.href="../SignIn.php";
</script>
<?php
}
?>