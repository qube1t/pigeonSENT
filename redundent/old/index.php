	<?php
session_start();
$iid = $_SESSION['error'];
?>
<html>
<head>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-indigo.min.css" />
<meta name="google-site-verification" content="HdzHrWx5oJi3TFzTC7uVH9Pgi_FZcfoiGL0E8s-Tmro" />
<title>PigeonSent</title>
</head>

<div style="background-color:#FF4D27;height:211px">
<div style="overflow: auto;float:right;background-color:#FF4D27;width:311px;display: flex;align-items: center;">
	
	<!--Login-form-->
<form action="login/login.php" method="POST">
<h3 style="color:white">Login</h3>
<h7 style="color:white">Username: &nbsp</h7><input type="text" placeholder="Enter Username" name="uid" id="Uid" required><br>
<h7 style="color:white" >Password: &nbsp </h7><input type="password" placeholder="Enter Password" name="pwd" required>
<br><br>
<!--<button type="submit" style="float:middle">Login</button>&nbsp
	<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" style="float:middle">
  Login
</button>
	<!-- Raised button with ripple -->
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="signup()" style="float:middle">
  Sign Up
</a>

	<!--<a onclick="signup()" style="float:middle">Sign Up</a>&nbsp&nbsp-->
	
	<?php
echo "<span style='color:black;text-align:center;'> $iid </span> ";
?>
</form>
</div>
	
	<script>
function signup() {
    window.open("http://pigeonsent.ueuo.com/Register.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
}
</script>

		<!--Login-form-ends-here-->

	<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>
	<br><br><br><br>
<p class="customfont">&nbsp pigeonsent</p>
</div>
<link href="css.css" rel="stylesheet" type="text/css">
 <!--Google -Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
<!--Font-awsome-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
			
		<style>
#ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

#li {
    float: left;
}

 #li #l  {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#li #l:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body >

<ul id="ul">
  <li id="li"><a id="l" href="#home">Home</a></li>
  <li id="li"><a id="l" href="#news">News</a></li>
  <li id="li"><a id="l" href="#contact">Contact</a></li>
	
	<div id="share-buttons" style="float:right">
    
   
    
    <!-- Email -->
    <a href="mailto:?Subject=Lets chat using PigeonSENT!&amp;Body=I%20saw%20this%20and%20thought%20 http://pigeonsent.ueuo.com">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
    </a>
 
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=http://pigeonsent.ueuo.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=http://pigeonsent.ueuo.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://pigeonsent.ueuo.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
   
     
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=http://pigeonsent.ueuo.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    


 &nbsp&nbsp <li id="li" style="float:right"><a id="l" class="active" href="#about">About</a></li>
		</ul></div>
<br><br>
	
	<br><br>
	
	<div style="border: 1px solid black; width:25%; height:50%; float:left;">
		<h1 style="color:black; text-align:center;">
			<u>Change Log:</u>
		</h1><br>
		<iframe style="width:100%; height:77%;" frameBorder="0" src="news.html" ></iframe>
		
		
		 
	</div>
	<h4 style="color:black; text-align:center;">...This webpage is still under early developments ...<br>Please report bugs to the Administrator</h4>
	<br>
<iframe style="height:222px; width:999px"src="soon/index.html" frameBorder="0" id="cube" style="overflow:hidden;" scrolling="no" onload="iframeLoaded()">
	
	</iframe>

<script>
function myFunction() {
    window.open("http://pigeonsent.ueuo.com/chat/chat.html", "_blank", "toolbar=no,scrollbars=false,resizable=no,top=500,left=500,width=559,height=559");
}
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 window.location.href = "phone.html";
}
</script>
<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Features</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">About</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">Updates</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Details</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Specs</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Resources</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Technology</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">How it works</a></li>
        <li><a href="#">Patterns</a></li>
        <li><a href="#">Usage</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contracts</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">FAQ</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Questions</a></li>
        <li><a href="#">Answers</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

  </div>

  <div class="mdl-mega-footer__bottom-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mega-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>

</footer>
	</body>
	</html>
