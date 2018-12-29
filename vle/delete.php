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
<title>Yathra</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css/superfish.css">
<link rel="stylesheet" href="../Tourism Template/css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="../Sweet Alerts/sweetalert.css">
<script src="../Sweet Alerts/sweetalert.min.js"></script>
<script src="../Tourism Template/js/jquery.min.js"></script>

<style type="text/css">
.icon_img
{
height:50px;
widows:50px;
cursor:pointer;
}
.icon_img:hover
{
background-color:#333333;
border-radius:15px
}
</style>
<script type="text/javascript">
function gotoConfirm(id)
{
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  window.location.href="delete.php?del_id="+id;
});

}

</script>
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
        <h1 class="page-title">Staff</h1>
<br />

			<?php
			include("../connection.php");
			 $q=mysql_query("select * from staff_reg where centercode='".$_SESSION['centercode']."'");
			 if(mysql_num_rows($q)>0)
			 {
			 ?>
			 <table id="table">
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Designation</th>
<th>Delete</th>
</tr>
			 <?php
			 while($a=mysql_fetch_array($q))
			 {
			 ?>
			<tr>
			
			<td><?php echo $a['firstname'];?></td>
			<td><?php echo $a['lastname'];?></td>
			<td><?php echo $a['designation'];?></td>
			<td><img src="../Tourism Template/images/if_file_delete_48762.png" class="icon_img" onClick="gotoConfirm('<?php echo $a[0];?>')"></td>
			</tr>
			 <?php
			 }
			?>
			</table>
			<?php
			}
			else
			{
		 ?>
		   <div class="alert">
  <span class="closebtn" onClick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Info!</strong> No Staff.
</div>
		 <?php
			}
			?>
<br /><br />
<br />
<br />
<br /><br /><br />
<br />

 
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

if(isset($_GET['del_id']))
 {

  mysql_query("delete from staff_reg where id='".$_GET['del_id']."'");
  if(mysql_affected_rows($con)>0)
  {
  ?>
  <script type="text/javascript">
   swal({
  title: "Success",
  text: "Package Type Deleted Successfully",
  type: "success"
  },
  function(){
  window.location.href='delete.php';
  });
  </script>
  <?php
  }
 
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