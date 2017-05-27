<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">    
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
	<script src="js/Open_Sans_italic_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>    
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
	<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page6">
<!-- header -->
	<header>
		<div class="row-top">
			<div class="main zerogrid">
				<div class="wrapper">
					<div class="col-2-3">
						<h1><a class="logo" href="index.html"><img src="images/logo1.jpg" /></a></h1>  
					</div>
					
				</div>
			</div>
		</div>
		<div class="row-bot">
			<div class="row-bot-shadow">
				<div class="main zerogrid">
					<div class="col-full">
						<nav>
							<ul class="menu">
								<li><a href="index.php">Home</a><strong></strong></li>
								<li><a href="about.php">About Us</a><strong></strong></li>
								<li><a href="events.php">Events</a><strong></strong></li>
								<li><a href="registrations.php">Registrations</a><strong></strong></li>
								<li><a href="workshops.php">Workshops</a><strong></strong></li>
								<li class="last active"><a href="contacts.php">Contacts</a><strong></strong></li>
							</ul>
						</nav>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="main zerogrid">
				<div class="border-bot margin-bot">
					<article class="col-full"><div class="wrap-col">
						<div class="aligncenter inner-top">
													</div>
					</div></article>
					<div class="clear"></div>
				</div>
				<div class="wrapper">
					<article class="col-2-3"><div class="wrap-col">
						<h2>For Further Details</h2>
						<form id="contact-form" method="post" enctype="multipart/form-data">					
							<fieldset>
								  <label><span class="text-form">Name:</span><input name="p1" type="text" /></label>
								  <label><span class="text-form">Email:</span><input name="p2" type="text" /></label>   
								  <label><span class="text-form">Phone:</span><input name="p3" type="text" /></label>									
								  <div class="wrapper"><div class="text-form">Message:</div><textarea></textarea></div>
								  <div class="buttons" style="text-align: center;">
									  <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
									  <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
								  </div>							 
							</fieldset>						
						</form>
					</div></article>
					<article class="col-1-3"><div class="wrap-col mag-1">
						<h2>Find Us</h2>
						<figure class="img-indent-bot">
							


 <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PHP/MySQL & Google Maps Example</title>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(13.613763, 79.299574),
        zoom: 14,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onload="load()">
    <div id="map" style="width: 500px; height: 300px"></div>
  </body>




						</figure>
						<dl>
							<dt class="indent-bot">Sree Sainath Nagar,<br>A.Rangampet, Tirupati.</dt>
							<dd><span>Freephone:</span>  +1 800 559 6580</dd>
							<dd><span>Telephone:</span>  +1 959 603 6035</dd>
							<dd><span>FAX:</span>  +1 504 889 9898</dd>
							<dd><span></span> <a href="#">www.vidyaniketan.edu</a></dd>
						</dl>
					</div></article>
				</div>
		</div>
	</section>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>