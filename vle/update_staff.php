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
<script type="text/javascript">
 function checkUsername(uname)
 {
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","GetUsername_edit.php?uname="+uname,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
  if(http.responseText=="This Username Already Exists")
  {
   document.getElementById("txtu").innerHTML="<font color='red'>"+http.responseText+"</font>";
   document.getElementById("btn").disabled="true";
   }
   else
   {
   document.getElementById("txtu").innerHTML="";
   document.getElementById("btn").disabled="";
   }
  }
  }
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
      <div class="columns large-7 content">
        <h1 class="page-title">Edit Profile</h1>
<br />
          <?php
		   include("../connection.php");
		   $q=mysql_query("select * from staff_reg where id='".$_GET['id']."'");
		   if($a=mysql_fetch_array($q))
		   {
		   ?>
            <form id="contact-form" method="post" action="" enctype="multipart/form-data">
			<table style="width:500px">
			<caption><img src="photo/Photos/<?php echo $a['photo'];?>" height="100" width="100" /></caption>
			<tr>
			<td>Center code</td>
			<td><input type="text" value="<?php echo $a['centercode'];?>" name="txtcentercode"  /></td></tr>
			<tr>
			<td>Firstname</td>
			<td><input type="text" value="<?php echo $a['firstname'];?>" name="txtname"  /></td></tr>
			<tr>  <td>Lastname</td>
			<td> <input type="text" name="txtcentercode" value="<?php echo $a['lastname'];?>" required ></td>
			  </tr>
			  <tr>
			<td >Phone</td>
			<td> <input type="text" name="txtphone" value="<?php echo $a['phone'];?>" required></td>
			</tr>
			 <tr>
			<td >Place</td>
			<td> <input type="text" name="txtplace" value="<?php echo $a['place'];?>" required></td>
			
			</tr>
			<tr>
			<td >Email</td>
			<td> <input type="email" name="txtemail" value="<?php echo $a['email'];?>" required></td>
			
			</tr>
			 <tr>
			<td >Designation</td>
			<td> <select name="txtdesignation" id="txtdesignation">
        <option selected="" value=""><?php echo $a['designation'];?></option>
<option value="manager">Manager</option>
<option value="office staff">Office Staff</option>
<option value="receptionist">Receptionist</option>

      </select></td></tr>
	  <tr>
			  <td>Grade</td>
			  <td><select name="txtgrade" id="txtgrade">
        <option selected="" value=""><?php echo $a['grade'];?></option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>

      </select></td>
			
			<tr><td>Salary</td>
			<td> <input type="text" name="txtsalary" value="<?php echo $a['salary'];?>" required ></td>
			</tr>
			<tr><td>Martial Status</td>
			<td> <select name="txtmartialstatus" id="txtmartialstatus">
        <option selected="" value=""><?php echo $a['martial_status'];?></option>
<option value="single">Single</option>
<option value="married">Married</option>

      </select></td>
			</tr>
			<tr><td>Blood Group</td>
			<td> <select name="txtbloodgroup" id="txtbloodgroup">
        <option selected="" value=""><?php echo $a['blood_group'];?></option>
<option value="A">A</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB">AB</option>
<option value="B+">B+</option>
<option value="AB">AB</option>
      </select></td>
			</tr>
			<tr><td>Qualification</td>
			<td> <input type="text" name="txtqualification" value="<?php echo $a['qualification'];?>" required ></td>
			</tr>
			<tr><td>Experience</td>
			<td> <input type="text" name="txtexperience" value="<?php echo $a['experience'];?>" required ></td>
			</tr>
			
			

			 
			
			  			<tr><td>Photo</td><td>          <input type="file" name="txtfile"  onChange="prev(event)"> <div id="pre"></div></td></tr>
			
			  <td colspan="4" align="center"><input type="submit" class="button" name="btn1" id="btn" value="Edit" /></td>
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




if(isset($_POST['btn1']))
{
	if(is_uploaded_file($_FILES['txtfile']['tmp_name']))
	{
		mysql_query("update staff_reg set centercode='".$_POST['txtcentercode']."',firstname='".$_POST['txtfirstname']."',lastname='".$_POST['txtlastname']."',phone='".$_POST['txtphone']."',place='".$_POST['txtplace']."',email='".$_POST['txtemail']."',gender='".$_POST['gender']."',designation='".$_POST['txtdesignation']."',grade='".$_POST['txtgrade']."',salary='".$_POST['txtsalary']."',martial_status'".$_POST['txtmartialstatus']."',blood_group='".$_POST['txtbloodgroup']."',qualification='".$_POST['txtqualification']."',experience='".$_POST['txtexperience']."',photo='".$_FILES['txtfile']['name']."' where id='".$_SESSION['id']."'");
		  move_uploaded_file($_FILES['txtfile']['tmp_name'],"photo/Photos/".$_FILES['txtfile']['name']);
											
	}
	else
	{
		mysql_query("update staff_reg set centercode='".$_POST['txtcentercode']."',firstname='".$_POST['txtfirstname']."',lastname='".$_POST['txtlastname']."',phone='".$_POST['txtphone']."',place='".$_POST['txtplace']."',email='".$_POST['txtemail']."',gender='".$_POST['gender']."',designation='".$_POST['txtdesignation']."',grade='".$_POST['txtgrade']."',salary='".$_POST['txtsalary']."',martialstatus='".$_POST['txtmartialstatus']."',blood_group='".$_POST['txtbloodgroup']."',qualification='".$_POST['txtqualification']."',experience='".$_POST['txtexperience']."' where id='".$_SESSION['id']."'");
	}
	$_SESSION['id']=$_POST['txtcentercode'];
  ?>
 <script type="text/javascript">
 swal({
  title: "Success",
  text: "Your Profile Updated Successfully",
  type: "success"
  },
  function(){
  window.location.href='home.php';
  });
 </script>
  <?php

}


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