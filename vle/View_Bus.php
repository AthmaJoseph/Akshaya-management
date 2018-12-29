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
<link href="../Tourism Template/css/gallery.css" rel="stylesheet" type="text/css" />
<link href="../Tourism Template/css/search_box.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript">
 function getPackageCatgry(type)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","GetCategory.php?type="+type,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
   document.getElementById("txtcat").innerHTML=http.responseText;
  }
  }
 }
</script>
<script type="text/javascript">
function goConfirm(bid)
{
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this bus detail!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  window.location.href="Delete_Bus.php?id="+bid;
});

}

</script>


<!--[if lt IE 9]>
<link rel="stylesheet" href="../Tourism Template/css//ie-fixes.css">
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
      <div class="columns large-7 content" style="width:100%">
        <h1 class="page-title">Bus List</h1>
<br />
          <?php
		  include("../connection.php");
		  $q=mysql_query("select * from bus_tb,package_tb where package in(select id from package_tb where traveler='".$_SESSION['id']."') and bus_tb.package=package_tb.id");
		  if(mysql_num_rows($q)>0)
		  {
			?>
                <table cellpadding="0" cellspacing="0" border="1" id="table">
      <thead>
        <tr>
		   <th>Id</th>
           <th>Type</th>
		   <th>Brand</th>
           <th>Number</th>
		   <th>Route Number</th>
           <th>Seats</th>
		   <th>Depature Place</th>
           <th>Depature Time</th>
           <th  colspan="3">Package</th>
        </tr>
      </thead>
      <tbody>

            <?php
		  while($a=mysql_fetch_array($q))
		  {
		  ?>
          <tr>
		   <td><?php echo $a[0];?></td>
           <td><?php echo $a[1];?></td>
		   <td><?php echo $a['brand'];?></td>
           <td><?php echo $a['number'];?></td>
		   <td><?php echo $a['route_no'];?></td>
           <td><?php echo $a['total_seat'];?></td>
		   <td><?php echo $a['dep_place'];?></td>
		   <td><?php echo $a['dep_time'];?></td>
           <td><?php echo $a['place'];?></td>
           <td><a href="Edit_Bus.php?id=<?php echo $a[0];?>"><img src="../Tourism Template/images/if_edit_173002.png" height="50" width="50" /></a></td>
           <td><img src="../Tourism Template/images/if_file_delete_48762.png" height="50" width="50" style="cursor:pointer" onClick="goConfirm('<?php echo $a[0];?>')" /></td>
           </tr>
		   <?php
		   }
		   ?>
           </tbody>
           </table>
		   <?php
		  }
		  else
		  {
		  ?>
		  		   <div class="alert">
				  <span class="closebtn" onClick="this.parentElement.style.display='none';">&times;</span> 
				  <strong>Info!</strong> No Bus Fount.
				</div>
		  <?php
		  }
		  ?>




<br /><br />
<br />
<br />
<br /><br />
<br />
<br /><br /><br />
<br />
<br />

 
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


}
else
{
?>
<script type="text/javascript">
window.location.href='../index.php';
</script>
<?php
}
?>