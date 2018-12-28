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
<title>Akshaya</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet"  href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet"  href="../Tourism Template/css/superfish.css">
<link rel="stylesheet"  href="../Tourism Template/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../Sweet Alerts/sweetalert.css">
<script src="reg2.js"></script>
<script src="../Sweet Alerts/sweetalert.min.js"></script>
<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>



<script type="text/javascript">
 function prev(event)
 {
  var src=URL.createObjectURL(event.target.files[0]);
   document.getElementById("pre").innerHTML="<img src="+src+" height=100 width=100>";
 }
</script>

<!--[if lt IE 9]>
<link rel="stylesheet"  href="Tourism Template/css/ie-fixes.css">
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
</div>
<div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-12 content ">
        <h1 class="page-title">Staff  Registration</h1>
        <div>
          <h2 class="sub-title" style="font-family:Verdana">Gateway of opportunities.......</h2>
        </div>
        <div class="row contact-form"><div class="columns large-8" style="font-family:Verdana">
		<form id="contact-form" id="contact-form" method="post" action="" enctype="multipart/form-data" >
		<?php
		include("../connection.php");
		?>
        <table width="631" height="488">
			<tr>
			<td width="395">
              <input type="text" name="txtcentercode" id="txtcentercode" placeholder="Center Code:" required ></td>
			            
			  </tr>
			  <tr>  <td >
			  <input type="text" name="txtempid" id="txtempid" placeholder="Emp Id(Adhar No):" required  ><div id="txtu"></div></td></tr>
			  <tr>
			  <td>
              <input type="text" name="txtfirstname" id="txtfirstname" placeholder="First Name:" required></td>
			  </tr>
			  <tr>
			  <td>
              <input type="text" name="txtlastname" id="txtlastname" placeholder="Last Name:" required></td>
			  </tr>
			  <tr> <td><input type="text" name="txtphone" id="txtphone" placeholder="Phone" required> </td></tr>
               <tr>
			  <td>
              <input type="text" name="txtplace" id="txtplace" placeholder="Place:" required  /></td>
			  </tr>
			  <tr>
			  <td>
              <input type="email" name="txtemail" id="txtemail" placeholder="E_Mail" required >
			  </td></tr>
                
			  <tr>
			  
			  <td>
               
              Male<input type="radio" name="gender" value="male" checked="checked"> 
			  Female<input type="radio" name="gender" value="female">
			  </td>
			 
			  </tr>
			  <tr> <td>
               <select name="txtdesignation" id="txtdesignation">
        <option selected="" value="Default">(Please Select Designation)</option>
<option value="manager">Manager</option>
<option value="office staff">Office Staff</option>
<option value="receptionist">Receptionist</option>

      </select>
			  <td></tr>
				
			  <tr><td>
			  <select name="txtgrade" id="txtgrade">
        <option selected="" value="Default">(Please Select Grade)</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>

      </select>
			  </td>
            </tr>
			<tr><td>
            <input type="text" name="txtsalary" id="txtsalary" placeholder="Salary:" required ></td></tr>
			<tr>
            <td>
               <select name="txtmartialstatus" id="txtmartialstatus">
        <option selected="" value="Default">(Please Select Martial Status)</option>
<option value="single">Single</option>
<option value="married">Married</option>

      </select>
			  <td></tr>
			<tr> <td>
               <select name="txtbloodgroup" id="txtbloodgroup">
        <option selected="" value="Default">(Please select Your Blood Group)</option>
<option value="A">A</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB">AB</option>
<option value="B+">B+</option>
<option value="AB">AB</option>
      </select>
			  <td></tr>
             <tr><td>
               <input type="text" name="txtqualification" id="txtqualification" placeholder="Qualification" required >
			  <td></tr>
			  <tr><td>
               <input type="text" name="txtexperience" id="txtexperience" placeholder="Experience(Year)" required >
			  <td></tr>
			  
             <tr>
			  <td>
               <input type="password" name="txtpswd" id="txtpswd" placeholder="Password:" required >
			  </td>
			   </tr>
			  			  <tr>
			  			  <td>
              <input type="file" name="txtfile"  required  onChange="prev(event)"> <div id="pre"></div></td>

			  <tr>

			  <tr>
			  <td colspan="2">
              <input type="submit" class="button" name="btn" id="btn" value="sign Up">
			  </td>
			  </tr>
			  </table>
            </form>
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
<script src="Tourism Template/js/jquery.min.js"></script>
<script src="Tourism Template/js/hoverIntent.js"></script>
<script src="Tourism Template/js/superfish.js"></script>
<script src="Tourism Template/Tourism Template/js/google-maps.js"></script>
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
 
 mysql_query("insert into staff_reg values('".$_POST['txtcentercode']."','".$_POST['txtempid']."','".$_POST['txtfirstname']."','".$_POST['txtlastname']."','".$_POST['txtphone']."','".$_POST['txtplace']."','".$_POST['txtemail']."','".$_POST['gender']."','".$_POST['txtdesignation']."','".$_POST['txtgrade']."','".$_POST['txtsalary']."','".$_POST['txtmartialstatus']."','".$_POST['txtbloodgroup']."','".$_POST['txtqualification']."','".$_POST['txtexperience']."','".$_POST['txtpswd']."','".$_FILES['txtfile']['name']."','".date("Y-m-d")."')")or die(mysql_error());
 if(mysql_affected_rows($con)>0)
 {
  move_uploaded_file($_FILES['txtfile']['tmp_name'],"photo/Photos/".$_FILES['txtfile']['name']);
  ?>
  <script type="text/javascript">
   swal("Success!", "Your Account Created Successfully!", "success");
  </script>
  
    <?php
  }
  
 }
 
 ?>
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