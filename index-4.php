
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contacts</title>
	<!--FAVICON-->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
	<link rel="stylesheet" href="css/contact-form.css">

	<!--JS-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
	<script src="js/TMForm.js"></script>

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
		<div class="header_bootom"  id="stuck_container">
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
                        	CONTENT
	=========================================================-->
	<div id="content">
		<div class="block-4 bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3 class="title title-2">how to find us</h3>
						<div class="google-map-api">
							<div id="map-canvas" class="gmap"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-2 bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<h3 class="title title-2">address</h3>
						<dl class="list list-5">
							<dt>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800 603 6035</dd>
							<dd><span>FAX:</span>+1 800 889 9898</dd>
							<dd>E-mail: <a href="#" class="link link-1">mail@demolink.org</a>
							</dd>
						</dl>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<h3 class="title title-2">Contact form</h3>
						<form id="contact-form">
							<div class="contact-form-loader"></div>
							<fieldset>
								<label class="name form-div-1">
									<input type="text" name="name" placeholder="Name*:" value="" data-constraints="@Required @JustLetters" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid name.</span>
								</label>
								<label class="email form-div-2">
									<input type="text" name="email" placeholder="Email*:" value="" data-constraints="@Required @Email" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid email.</span>
								</label>
								<label class="phone form-div-3">
									<input type="text" name="phone" placeholder="Phone*:" value="" data-constraints="@Required @JustNumbers" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid phone.</span>
								</label>
								<label class="message form-div-4">
									<textarea name="message" placeholder="Message*:" data-constraints='@Length(min=20,max=999999)'>

									</textarea>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*The message is too short.</span>
								</label>
								<!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
								<div class="btns">
									<a href="#" data-type="submit" class="btn-default btn btn-3">Submit</a>
									<p>* required fields</p>
								</div>
							</fieldset>
							<div class="modal fade response-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												&times;
											</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">
											You message has been sent! We will be in touch soon.
										</div>
									</div>
								</div>
							</div>
						</form>
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
		google_api_map_init();

		function google_api_map_init() {
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068, 14));
			var markCoord1 = new google.maps.LatLng(parseFloat(40.643180), parseFloat(-73.9874068, 14));
			var markCoord2 = new google.maps.LatLng(parseFloat(40.6422180), parseFloat(-73.9784068, 14));
			var markCoord3 = new google.maps.LatLng(parseFloat(40.6482180), parseFloat(-73.9724068, 14));
			var markCoord4 = new google.maps.LatLng(parseFloat(40.6442180), parseFloat(-73.9664068, 14));
			var markCoord5 = new google.maps.LatLng(parseFloat(40.6379180), parseFloat(-73.9552068, 14));
			var marker;

			var styleArray = [{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": []
					}];
			var markerIcon = {
				url: "img/gmap_marker.png",
				size: new google.maps.Size(42, 64),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(21, 70)
			};
			/*var markerIcon = { 
					url: "img/gmap_marker.png", 
					size: new google.maps.Size(53, 71), 
					origin: new google.maps.Point(0,0), 
					anchor: new google.maps.Point(21, 70) 
			}; */
			function initialize() {
				var mapOptions = {
					zoom: 14,
					center: coordData,
					scrollwheel: false,
					styles: styleArray
				}

				var contentString = "<div></div>";
				var infowindow = new google.maps.InfoWindow({
					content: contentString,
					maxWidth: 200
				});
				marker = new google.maps.Marker({
					map: map,
					draggable: true,
					position: coordData,
					icon: markerIcon
				});
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				marker = new google.maps.Marker({
					map: map,
					position: markCoord1,
					icon: markerIcon
				});

				/*marker1 = new google.maps.Marker({ 
						map:map, 
						position: markCoord2, 
						icon: markerIcon
				}); 
	
				marker2 = new google.maps.Marker({ 
						map:map, 
						position: markCoord3, 
						icon: markerIcon
				}); 
	
				marker3 = new google.maps.Marker({ 
						map:map, 
						position: markCoord4, 
						icon: markerIcon
				}); 
	
				marker4 = new google.maps.Marker({ 
						map:map, 
						position: markCoord5, 
						icon: markerIcon
				}); */

				var contentString = '<div id="content">' +
					'<div id="siteNotice">' +
					'</div>' +
					'<div id="bodyContent">' +
					'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>' +
					'</div>' +
					'</div>';

				var contentString1 = '<div id="content">' +
					'<div id="siteNotice">' +
					'</div>' +
					'<div id="bodyContent">' +
					'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>' +
					'</div>' +
					'</div>';
				/*
				var contentString2 = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<div id="bodyContent">'+
				'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>'+
				'</div>'+
				'</div>';
	
				var contentString3 = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<div id="bodyContent">'+
				'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>'+
				'</div>'+
				'</div>';
	
				var contentString4 = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<div id="bodyContent">'+
				'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>'+
				'</div>'+
				'</div>';*/

				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});

				/*var infowindow1 = new google.maps.InfoWindow({
						content: contentString1
				});
	
				var infowindow2 = new google.maps.InfoWindow({
						content: contentString2
				});
	
				var infowindow2 = new google.maps.InfoWindow({
						content: contentString3
				});
	
				var infowindow2 = new google.maps.InfoWindow({
						content: contentString4
				});*/



				google.maps.event.addListener(marker, 'click', function () {
					infowindow.open(map, marker);
					$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
				});

				/*google.maps.event.addListener(marker1, 'click', function() {
					infowindow.open(map,marker1);
					$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
				});
	
				google.maps.event.addListener(marker2, 'click', function() {
					infowindow.open(map,marker2);
					$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
				});
	
				google.maps.event.addListener(marker3, 'click', function() {
					infowindow.open(map,marker3);
					$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
				});
	
				google.maps.event.addListener(marker4, 'click', function() {
					infowindow.open(map,marker4);
					$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
				});*/

				google.maps.event.addDomListener(window, 'resize', function () {

					map.setCenter(coordData);

					var center = map.getCenter();
				});
			}

			google.maps.event.addDomListener(window, "load", initialize);

		}
	</script>
</body>

</html>