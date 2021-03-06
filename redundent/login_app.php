	<?php
session_start();
$iid = $_SESSION['error'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>PigeonSENT</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout__header-row">
        </div>
        <div class=" mdl-layout__header-row">
         <img height="144px" width="144px" src="PS_logo_new.png" alt="logo"> <img src="PigeonSent.png">
        </div>
        <div class=" mdl-layout__header-row">
        </div>
       </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="features">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Log In / Sign Up Now!</h4>
              Log In / Sign Up to access the extensive features of PigeonSENT!
<br>
              <br>
             	<!--FORM STARTS-->
    <div class="page-content"><form action="http://pigeonsent.ueuo.com/login/loginforapp.php" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" placeholder="Enter Username" name="uid" id="Uid" required>
    <label class="mdl-textfield__label" for="sample3">Name: &nbsp</label>
  </div>
      <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" placeholder="Enter Password" name="pwd" required>
    <label class="mdl-textfield__label" for="sample3">Password &nbsp</label>
  </div>
<br><br>
			
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"type="submit" style="float:middle">
 Log In
</button>&nbsp

      <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" a onclick="signup()" style="float:middle">
  Sign Up
</a>&nbsp&nbsp
	
	<?php
echo "<span style='color:#FF0000;text-align:center;'> $iid </span> ";
?>
</form>
</div>
	
	<script>
function signup() {
    window.open("http://pigeonsent.ueuo.com/Register.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
}
</script>
								<script>
function discord() {
    window.open("https://discord.gg/m9dg7U3", "_blank");
}
</script>
				<!--Login-form-ends-here-->
          <br>
							<br>
							<h2>
								
							</h2>
							<br>
    
  	        </div>
          </section>
	
        </div>
      </main>
    </div>


    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  </body>
</html>
