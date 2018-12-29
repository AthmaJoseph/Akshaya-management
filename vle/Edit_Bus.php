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
 function prev(event)
 {
  var src=URL.createObjectURL(event.target.files[0]);
   document.getElementById("img").innerHTML="<img src="+src+" height=100 width=100>";
 }
</script>

<script type="text/javascript">
 $(document).ready(function(){
 $("#add").click(function(){
 var con="<tr><td ><input type='text' name='txtplace[]' placeholder='Place:' style='width:450px;' /></td></tr>";
$("#newtb").append(con);

 });
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
      <div class="columns large-7 content">
        <h1 class="page-title">Edit Bus Details</h1>
<br />
          <?php
		  include("../connection.php");
		  $q=mysql_query("select * from bus_tb,package_tb where bus_tb.id='".$_GET['id']."' and bus_tb.package=package_tb.id");
		  if($a=mysql_fetch_array($q))
		  {
          ?>
            <form id="contact-form" enctype="multipart/form-data" method="post" action="">
			<table style="width:800px;">
            <tr>
			<td>Package
			<select name="pkg" required >
			<option value="">Select Package</option>
				<?php
				include("../connection.php");
				$q1=mysql_query("select * from package_tb where traveler='".$_SESSION['id']."'");
				while($a1=mysql_fetch_array($q1))
				{
				?>
                <option value="<?php echo $a1[0];?>" <?php if($a1[0]==$a['package']){echo "selected";}?>><?php echo $a1['place'];?></option>
                <?php
				}?>
            </select>
			  </td>
              
			<td>
            Type
			<select name="type" required >
			<option value="">Select Type</option>
            <option  <?php if($a[1]=="Sleeper A/C"){echo "selected";}?>>Sleeper A/C</option>
            <option <?php if($a[1]=="Sleeper Non A/C"){echo "selected";}?>>Sleeper Non A/C</option>
            </select>
			  </td>
                          <td rowspan="4"><img src="Bus/<?php echo $a['photo'];?>" height="245" width="219"></td>

			  </tr>
						<tr>
			<td>Brand
			<select name="brand" required >
			<option value="">Select Brand</option>
            <option <?php if($a['brand']=="Volvo"){echo "selected";}?>>Volvo</option>
            <option  <?php if($a['brand']=="Tata"){echo "selected";}?>>Tata</option>
            <option  <?php if($a['brand']=="Eicher"){echo "selected";}?>>Eicher</option>
            <option  <?php if($a['brand']=="Mahendra"){echo "selected";}?>>Mahendra</option>
            </select>
			  </td>

			  <td>Bus Number<input type="text" name="txtnum" value="<?php echo $a['number'];?>" required placeholder="Bus Number:" /></td>
			  </td>
			  </tr>
			  <tr>
			  <td>Route Number<input type="text" name="txtrnum" value="<?php echo $a['route_no'];?>" required placeholder="Route Number:" /></td>

			  <td>Seats<input type="text" required name="txtseat" placeholder="Seats:" value="<?php echo $a['total_seat'];?>"></td>
			  </tr>

			  <tr>
              <td>Price<input type="text" name="txtprice" required value="<?php echo $a['price'];?>" placeholder="Rs.:" /></td>
			  <td>Depature Place<input type="text" name="txtdep_place"  value="<?php echo $a['dep_place'];?>" required placeholder="Depature Place:" /></td>
			  </tr>
			  <tr>
			  <td>Depature Time<input type="time" name="txtdep_time" value="<?php echo $a['dep_time'];?>" required placeholder="Depature Time:" /></td>
              <td>Photo<input type="file" name="txtfile"  onChange="prev(event)"></td> <td id="img"></td>
			  </tr>
			  <tr>
			  <td colspan="2" align="center">
              <input type="submit" class="button" name="btn" value="Save">
			  </td>
			  </tr>
			  </table>
            </form>
            <?php
			}
			?>
<br /><br />
<br />
<br />
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

<?php

if(isset($_POST['btn']))
 {
  include "../connection.php";
  if(is_uploaded_file($_FILES['txtfile']['tmp_name']))
  {
  mysql_query("update bus_tb set type='".$_POST['type']."',brand='".$_POST['brand']."',route_no='".$_POST['txtrnum']."',number='".$_POST['txtnum']."',package='".$_POST['pkg']."',dep_place='".$_POST['txtdep_place']."',dep_time='".$_POST['txtdep_time']."',total_seat='".$_POST['txtseat']."',photo='".$_FILES['txtfile']['name']."',price='".$_POST['txtprice']."' where id='".$_GET['id']."'")or die(mysql_error());

	 move_uploaded_file($_FILES['txtfile']['tmp_name'],"Bus/".$_FILES['txtfile']['name']);
	 }
	 else
	 {
  mysql_query("update bus_tb set type='".$_POST['type']."',brand='".$_POST['brand']."',route_no='".$_POST['txtrnum']."',number='".$_POST['txtnum']."',package='".$_POST['pkg']."',dep_place='".$_POST['txtdep_place']."',dep_time='".$_POST['txtdep_time']."',total_seat='".$_POST['txtseat']."',price='".$_POST['txtprice']."' where id='".$_GET['id']."'")or die(mysql_error());
	 }
	 if(mysql_affected_rows($con)>0)
	 {
  ?>
  <script type="text/javascript">
   swal({
  title: "Success",
  text: "Your Bus Registrated Successfully",
  type: "success"
  },
  function(){
  window.location.href='Edit_Bus.php?id=<?php echo $_GET['id'];?>';
  });
  </script>  <?php
  }
 
 }
 
?>
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