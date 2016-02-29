<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

#include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		case "manifest":
			$paginaPHP = "php/manifest.php";
		break;
		case "USExports":
			$paginaPHP = "php/USExports.php";
		break;
		case "WMLogistics":
			$paginaPHP = "php/WMLogistics.php";
		break;
		case "USImports":
			$paginaPHP = "php/USImports.php";
		break;
		case "About":
			$paginaPHP = "php/About.php";
			break;
		case "Electronicexport":
			$paginaPHP = "php/Electronicexport.php";
			break;
		case "ACEemanifest":
			$paginaPHP = "php/ACEemanifest.php";
		break;
		case "Warehouse":
			$paginaPHP = "php/Warehouse.php";
		break;
    default:
      $paginaPHP = "php/index-1.php";

	}
} else {
	$paginaPHP = "php/index-1.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IMEXSOL | Imports Exports Software Solutions</title>
  <link rel="icon" href="img/favicon.ico">
  <script src="js/carousel-preload.js"></script>

  <!--[if IE 8]><html class="ie8"><![endif]-->
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="css/carousel-animate.css">
  <link rel="stylesheet" type="text/css" href="css/theme.css" id="color-style">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
</head>
<body class="body-nav-fixed-menu-top">
<div class="wrapper-body">
	<!-- NAVBAR -->
    <!--===============================================================-->
    <div id="header">
      <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="menu-top menu-top-inverse">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 hidden-xs">
                <a class="title-menu-top display-inline-block" href="/cdn-cgi/l/email-protection#fc8f898c8c938e88bc99849d918c9099d29f9391"><span class="__cf_email__" data-cfemail="31424441415e4345715449505c415d541f525e5c">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a>
              </div>
              <div class="col-sm-7 col-xs-12">
                <div class="pull-right">
                  <div class="dropdown dropdown-login pull-left">
                    <button class="btn-menu-top" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Log in</button>
                    <div class="dropdown-menu dropdown-menu-right stop-prop" role="menu" aria-labelledby="dLabel">
                      <div class="wrapper-form-box">
                        <h3>Log In</h3>
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input type="text" class="form-control" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                              <input type="password" class="form-control" placeholder="Password">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary text-theme-xs mr-8">Login</button>
                          <a href="#" class="text-theme-xs pull-right a-black">Forgot your password ?</a>
                        </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="list-inline social-icons-menu-top pull-right">
                  <a href="https://www.facebook.com/IMEXSOL/?fref=photo" class="social-hover-v1 a-facebook"></a>
                  <a href="https://twitter.com/MyIMEXNet" class="social-hover-v1 a-twitter"></a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?m=index-1"><img class="img-responsive" src="img/imexlogo.png" alt="theme-img"></a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="index.php?m=index-1">Index</a></li>
                  
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solutions</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">

                  <li class="dropdown-submenu">
                    <a href="#">Services</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="index.php?m=manifest">Manifest</a></li>
                      <li><a href="index.php?m=USExports">US Exports</a></li>
                      <li><a href="index.php?m=USImports">US Imports</a></li>
                      <li><a href="index.php?m=WMLogistics">WMLogistics</a></li>
                      <li><a href="index.php?m=Electronicexport">Electronic Export</a></li>
                      <li><a href="index.php?m=#">Freight Management</a></li>
                      <li><a href="index.php?m=#">US Customs Clearance</a></li>
                      <li><a href="index.php?m=ACEemanifest">US Truck E-Manifest</a></li>
                      <li><a href="index.php?m=Warehouse">Werehouse Management</a></li>
                      <li><a href="index.php?m=#">Yard Management</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="li-mega-menu dropdown">
                <a href="index.php?m=#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News</a>
                
              </li>

              <li class="dropdown">
                <a href="About.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                 <li><a href="index.php?m=About">About Us</a></li>
                </ul>
              </li>

              <li class="li-mega-menu dropdown">
                <a href="index.php?m=#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Downloads</a>
                
              </li>

              <li class="dropdown">
                <a href="index.php?m=#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">

                </ul>
              </li>

              <li class="li-search">
                <form class="nav-search">
                  <label for="focus-input"><i class="fa fa-search"></i></label>
                  <input id="focus-input" class="container" type="search" name="s" placeholder="To Search, Type and Hit Enter">
                </form>
              </li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>

    <section class="scrollable wrapper w-f">
	<?php include $paginaPHP; ?>
	</section>
       <!--===============================================================-->
    <div class="section footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center col-footer-bottom">
            <a id="scroll-top" href="#"><i class="fa fa-angle-up fa-2x"></i></a>
            <p class="copyright">2016 &copy; Forbidden 403. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- NAVBAR END -->
	<!-- Bootstrap -->
	<!-- App -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/page.navbar-fixed-shrinked.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.waypoints.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/page.home.js"></script>
  <script src="js/style-switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59515546-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>