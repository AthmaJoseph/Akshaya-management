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
<script src="../Tourism Template/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".txt").keypress(function(e){
var key=e.which;
if(key==13)
{
 var row=$(this).closest("tr");
 var id=row.find("td:eq(1)").text();
 var data=$(this).val();
 update(data,id);
 
}

});

});
function update(reply,id)
{
 if(window.XMLHttpRequest)
 {
  http=new XMLHttpRequest();
  }
  else
  {
  http=new ActiveXobject("microsoft.XMLHTTP");
  }
  http.open("GET","InsertReply.php?r="+reply+"&id="+id,true);
  http.send();
  http.onreadystatechange=function()
  {
  if(http.readyState==4&&http.status==200)
  {
  window.location.href="Enquiry.php";
  }
  }
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
      <div class="columns large-7 content" style="float:left;left:0px">
 <h1 class="page-title">Enquiry</h1>

          <?php
		   include("../connection.php");
		   $q=mysql_query("select * from enquiry_tb ORDER BY 
   CASE WHEN reply IS NULL THEN 0 ELSE 1 END ASC,
   reply");
		   if(mysql_num_rows($q)>0)
		   {
		   ?>
		    
    <table height="121" border="1" cellpadding="0" cellspacing="0" id="table" style="width:900px" >
      <thead>
        <tr>
		<th colspan="2">Id</th>
		<th>Date</th>
		   <th>Name</th>
		   <th>Email</th>
		   <th>Subject</th>
		   <th>Question</th>
		    <th colspan="2">Reply</th>
        </tr>
      </thead>
      <tbody>
		   <?php
		   $c=1;
		    while($a=mysql_fetch_array($q))
			{
			?>
			<tr>
			<td><?php echo $c;?></td>
			<td style="visibility:hidden"><?php echo $a[0];?></td>
			<td style="width:120px"><?php echo $a['date'];?></td>	
			<td><?php echo $a['name'];?></td>
			<td><?php echo $a['email'];?></td>	
			<td><?php echo $a['subject'];?></td>
			<td><?php echo $a['question'];?></td>
			<td style="width:300px">
			<?php
			if($a['reply']!="")
			{
			echo $a['reply'];
			 }
			 else
			 {
			 ?>
			<textarea placeholder="Reply:" class="txt"></textarea>
			<?php
			}
			?>
			</td>
			</tr>
			<?php
			$c++;
			}
		   ?>
		</tbody>
    </table>
    
		   <?php
		   }
		   else
		   {
		   ?>
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
    <div class="columns large-1"> <img src="..Tourism Template/images/toparrow.png" alt="" class="scrollToTop"> </div>
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