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
<title>akshaya</title>
<link rel="icon" href="../Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="../Tourism Template/css/superfish.css">
<link rel="stylesheet" href="../Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="../Tourism Template/js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../Tourism Template/js/slider/flexslider.css">
<link rel="stylesheet" href="../Tourism Template/js/slider/flexcar.css">

<script src="../Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: '../Tourism Template/css/ie8-grid-foundation-4.css'
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
<div class="row content-wrapper">EMPLOYEE REGISTRATION
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-12 content" style="width:600px">
       <div class="slider">
    <div class="row">
      <div class="columns large-12" >
        <div class="row flexslider-row" >
          <div class="columns large-12" >
		  
		  
		  
		  
		  
		  <form id="contact-form" id="contact-form" method="post" action="" enctype="multipart/form-data" >
		<?php
		include("../connection.php");
		?>
        <table width="800" height="488">
			
			  <tr>  <td>Center Code</td><td >
			  <input type="text" name="txtcentercode" id="txtcentercode" placeholder="Center Code:" required onKeyUp="checkUsername(this.value)" ><div id="txtu"></div></td></tr>
			  <tr><td>Emp ID</td>
			  <td>
              <input type="text" name="txtempid" id="txtempid" placeholder="Emp Id:" required></td>
			  </tr>
			  <tr> <td>First Name</td><td><input type="text" name="txtfirstname" id="txtfirstname" placeholder="Firstname" required> </td></tr>
               <tr><td>Last Name</td>
			  <td>
              <input type="text" name="txtlastname" id="txtlastname" placeholder="Lastname:" required  /></td>
			  </tr>
			  <tr><td>Phone</td>
			  <td>
              <input type="text" name="txtphone" id="txtphone" placeholder="Phone" required >
			  </td></tr>
                
			  <tr><td>Place</td>
			  <td>
			  <input type="text" name="txtplace" id="txtplace" placeholder="Place" required >
			  </td>
			  </tr>
			  <tr><td>E_Mail</td><td> <input type="email" name="txtemail" id="txtemail" placeholder="Email:" required ></td></tr>
				<tr><td>Gender</td>			  
                <td>
               
              Male<input type="radio" name="gender" value="male" checked="checked"> Female<input type="radio" name="gender" value="female">
			  <td width="220"></td>
			   </tr>
			   <tr><td>Desiganation</td><td>
            <input type="text" name="txtdesiganation" id="txtmb" placeholder="Desiganation" required ></td></tr>
              <tr><td>Grade</td>
			  <td>
               <input type="text" name="txtgrade" id="txtgrade" placeholder="Grade" required >
			  <td>
			  </td>
			  </tr>
			  <tr><td>Salary</td>
			  <td>
               <input type="text" name="txtsalary" id="txtsalary" placeholder="Salary" required >
			  <td>
			  </td>
			  </tr>
			  <tr><td>Martial Status</td>
			  <td>
               <select name="bloodgroup" id="bloodgroup">
        <option selected="" value="Default">(Please Select)</option>
<option value="single">Single</option>
<option value="married">Married</option>

      </select>
			  <td>
			  </td>
			  </tr>
			  
			  <tr><td>Blood Group</td>
			  <td>
               <select name="bloodgroup" id="bloodgroup">
        <option selected="" value="Default">(Please select Your Blood Group)</option>
<option value="A">A</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB">AB</option>
<option value="B+">B+</option>
<option value="AB">AB</option>
      </select>
			  <td>
			  </td>
			  </tr>
			  
			  <tr><td>Qualification</td>
			  <td>
               <input type="text" name="txtqualification" id="txtqualification" placeholder="Qualification" required >
			  <td>
			  </td>
			  </tr>
			  
			  <tr><td>Experience</td>
			  <td>
               <input type="text" name="txtexperience" id="txtexperience" placeholder="Experience" required >
			  <td>
			  </td>
			  </tr>
			  
			  <tr><td>Password</td>
			  <td>
               <input type="password" name="txtpassword" id="txtpassword" placeholder="Password" required >
			  <td>
			  </td>
			  </tr>
			  
			  
			  			  <tr><td>Image</td>
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
		  
		  
		  
		  
		  </div>
        </div>
      </div>
    </div>
  </div>
      </div>
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
<script src="../Tourism Template/js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: '../Tourism Template/js/placeholder.min.js'
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

<?php
 if(isset($_POST['btn']))
 {
 mysql_query("insert into customer_tb values(0,'".$_POST['txtname']."','".$_POST['txtdob']."','".$_POST['txtage']."','".$_POST['gender']."','".$_POST['txtaddr']."','".$_POST['txtcountry']."','".$_POST['txtstate']."','".$_POST['txtdistrict']."','".$_POST['txtemail']."','".$_POST['txtphno']."','".$_FILES['txtfile']['name']."','".$_POST['txtuname']."','".$_POST['txtpswd']."','pending')")or die(mysql_error());
 if(mysql_affected_rows($con)>0)
 {
  move_uploaded_file($_FILES['txtfile']['tmp_name'],"Customer/Photos/".$_FILES['txtfile']['name']);
  ?>
  <script type="text/javascript">
  swal("Success!", "Your Account Created Successfully!", "success");
  </script>
  <?php
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