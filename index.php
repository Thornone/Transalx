<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<!--FAVICON-->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<!--META-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<!--CSS-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<!--JS-->
	
	<script src="js/camera.min.js"></script>
	<script src="js/jquery.equalheights.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
		jQuery(document).ready(function () {
			jQuery('.camera_wrap').camera({
				pagination: true,
				navigation: false,
				navigationHover: false,
				loaderOpacity: '0',
				fx: 'simpleFade',
				height: '53.9%',
				minHeight: '800px'
			});
			jQuery(".caption_bg").height(jQuery(".camera_caption").outerHeight).appendTo(".camera_overlayer");
		});
	</script>
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->

</head>

<body>
	<!--========================================================
                         	HEADER
	=========================================================-->
	<header id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="./" class="brand">
							<div class="brand_logo"><i class="fa fa-flag-o"></i>
							</div>
							<div class="wrapper">
								<h1 class="brand_name">Transalx</h1>
								<span class="brand_slogan">Translation Agency</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bootom" id="stuck_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="nav_wrapper">
							<nav class="nav navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
								<ul class="sf-menu">
									<li class="active">
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="index-1.php">about us</a>
									</li>
									<li>
										<a href="index-2.php">Languages</a>
									</li>
									<li>
										<a href="index-3.php">Services</a>
										<ul>
											<li>
												<a href="#">Dolore ipsu</a>
											</li>
											<li>
												<a href="#">Consecte</a>
												<ul>
													<li>
														<a href="#">Dolore ipsu</a>
													</li>
													<li>
														<a href="#">Consecte</a>
													</li>
													<li>
														<a href="#">Elit Conseq</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">Elit Conseq</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index-4.php">contacts</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--========================================================
                        		SLIDER
	=========================================================-->
	<div class="camera_block">
		<div class="caption_bg"></div>
		<div class="camera_wrap">
			<div data-src="images/page1-slide1.jpg">
				<div class="camera_caption">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h2>Website translation <br>AND LOCALIZATION SERVICES</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-src="images/page1-slide2.jpg">
				<div class="camera_caption">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h2>Proofreading, Transcription <br>AND VOICEOVER SERVICES</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-src="images/page1-slide3.jpg">
				<div class="camera_caption">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h2>Interpreting & Document <br>TRANSLATION SERVICES</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--========================================================
                        	CONTENT
	=========================================================-->
	<div id="content">
		<div class="block-1 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box box-1">
									<span class="badge">01</span>
									<h4>Translation <br>memory</h4>
									<h5>dolore ipsum</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore.</p>
									<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box box-1">
									<span class="badge">02</span>
									<h4>DESKTOP <br>PUBLISHING</h4>
									<h5>dolore ipsum</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore.</p>
									<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box box-1">
									<span class="badge">03</span>
									<h4>Terminology <br>management </h4>
									<h5>dolore ipsum</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore.</p>
									<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box box-1">
									<span class="badge">04</span>
									<h4>Proxy <br>translation</h4>
									<h5>dolore ipsum</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit, bibendum et condimentum metusip dolore.</p>
									<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-2 bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<h3 class="title title-1">Why You <br>Prefer Us?</h3>
						<div class="box box-2">
							<h5>Mes cuml dia sed ineniasinge dolor commete ipsum comnetus.</h5>
							<p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan dolore. Condime netus lullam utlacus adipiscing ipsum molestie.</p>
							<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h3 class="title title-2">What we <br>Offer</h3>
								<div class="thumb-pad-1">
									<div class="thumbnail">
										<img src="images/page1-img1.jpg" alt="photo">
										<div class="caption">
											<h5>Lila clome</h5>
											<h5>dolore ipsum</h5>
											<p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie. </p>
											<p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam ipsu utlacus adipiscing ipsum.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<ul class="list list-1 indent">
									<li><a href="#">Lorem ipsum dolor sit amet.</a>
									</li>
									<li><a href="#">consectetur adipiscing elit. </a>
									</li>
									<li><a href="#">In euismod est quis arcu.</a>
									</li>
									<li><a href="#">venenatis imperdiet Etiam in.</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-3 bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-file-text-o">Document Translation</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-desktop">Website <br>Translation</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-check-square-o">Proofreading <br>Service</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-headphones">Audio & Video <br>Translation</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-globe">Multilingual <br>Research</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="box box-3">
							<h4 class="fa fa-comments">Interpreting <br>Services</h4>
							<h5>Dolor nunc vule puta</h5>
							<p>Dolor nunc vule putateulr ips dol consem donec semp ertet lacini ate ultricie upien disse comete dolo lectus fgill itollicil tua ludin dolor nec met quam accumsan ipsun. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-1 bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="box box-4">
							<div class="header color-1">
								<h3>Gold</h3>
							</div>
							<h5>liquam rhoncus, libero non congue ultri.</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum vebibendum et condimentum metusip dolore ipsumsfaucibus sed dolore.</p>
							<div class="btns">
								<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="box box-4">
							<div class="header color-2">
								<h3>Silver</h3>
							</div>
							<h5>liquam rhoncus, libero non congue ultri.</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum vebibendum et condimentum metusip dolore ipsumsfaucibus sed dolore.</p>
							<div class="btns">
								<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="box box-4">
							<div class="header color-3">
								<h3>Bronze</h3>
							</div>
							<h5>liquam rhoncus, libero non congue ultri.</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum vebibendum et condimentum metusip dolore ipsumsfaucibus sed dolore.</p>
							<div class="btns">
								<a href="#" class="btn-default btn btn-1"><i class="fa fa-file-text-o"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--========================================================
                        	FOOTER
	=========================================================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="footer_info">
						<div class="wrapper">
							Telephone: +1 800 603 6035
							<br> E-mail: mail@demolink.org
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="footer_address">
						<div class="wrapper">
							<strong>Transalx</strong>28 Jackson Blvd Ste 1020
							<br>Chicago, IL 60604-2340
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="footer_privacy"><span class="pr_brand">Transalx </span> &copy; <span id="copyright-year"></span> |<a href="index-5.html" class="link email"> Privacy policy</a>
						<!-- {%FOOTER_LINK} -->
					</div>
					<ul class="list social-list">
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-rss"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--JS-->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/tm-scripts.js"></script>
	<script>
		if (jQuery("body").width() < 991) {
			jQuery('.box-4').equalHeights();
			jQuery('.box-3').equalHeights();
		}
		jQuery(window).resize(function () {
			jQuery('.box-4, .box-3').height('auto');
			if (jQuery("body").width() < 991) {
				jQuery('.box-4').equalHeights();
				jQuery('.box-3').equalHeights();
			}
		});
	</script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body>

</html>