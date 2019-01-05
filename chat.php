<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>akshaya</title>
<link rel="icon" href="Tourism Template/images/site_icon.png">
<meta charset="utf-8">
<link rel="stylesheet" href="Tourism Template/css/foundation.min.css">
<link rel="stylesheet" href="Tourism Template/css/superfish.css">
<link rel="stylesheet" href="Tourism Template/css/stylesheet.css">
<link rel="stylesheet" href="Tourism Template/js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="Tourism Template/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<style type="text/css">
.border
{
 height:200px;
 width:400px;
 float:left;
 padding:5px;
 margin:2px;
}
.style2 {color: #FFFFFF}
.style3 {
	color: #0000FF;
	font-size: 2em;
}
</style>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
</head>
<body>
<span class="style2"></span>
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

<link rel="stylesheet" type="text/css" href="chatfiles/chatstyle.css" />


<div id="chatarea">
 <div id="chatrooms">
<?php
include('chatfiles/setchat.php');
echo $chatS->chatRooms();          // add the chat rooms
?>
 </div>
 <div id="chatwindow"><div id="chats"></div><div id="chatusers"></div></div>
<div id="playchatbeep"><img src="chatex/playbeep2.png" width="25" height="25" alt="chat beep" id="playbeep" onclick="setPlayBeep(this)" /><span id="chatbeep"></span></div>
<?php echo $chatS->chatForm().jsTexts($lsite); ?>
<script type="text/javascript" src="chatfiles/chatfunctions.js"></script><noscript><a href="http://coursesweb.net/php-mysql/" title="PHP-MySQL Course">PHP-MySQL Course</a></noscript>
</div>
