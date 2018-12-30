<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact form design</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {color: #B8B8B8}
-->
</style>
</head>

<body>
	<div class="contact-title"><span class="style2"></span>
    <h1 class="style1">Akshaya</h1>
    <h2 class="style1">We are always ready to serve you !</h2>
    </div>     <div class="contact-form">
    	<form id="contact-form" method="post" action="contact-form-handler.php">
        <input name="name" type="text" class="form-control" placeholder="Your name"  />
        <br />
		<input name="email" type="email" class="form-control" placeholder="Your email" required />
        <br />
		<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br />
        <input type="submit" class="form-control submit" value="SEND MESSAGE" />




</body>
</html>
