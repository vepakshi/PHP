<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="side.css" type="text/css"> 
	<link rel="stylesheet"  href="popcss/elements.css" />
	<script src="popjs/my_js.js"></script>	
	
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
<body id="page4">
<!-- header -->
	<header>
		<div class="row-top">
			<div class="main zerogrid">
				<div class="wrapper">
					<div class="col-2-3">
						<h1><a class="logo" href="index.php"><img src="images/logo1.jpg" /></a></h1>  
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
								<li><a href="about.php">About us</a><strong></strong></li>
								<li class="active"><a href="events.php">Events</a><strong></strong></li>
								<li><a href="registrations.php">Registrations</a><strong></strong></li>
								<li><a href="workshops.php">Workshops</a><strong></strong></li>
								<li class="last"><a href="contacts.php">Contacts</a><strong></strong></li>
							</ul>
						</nav>
					</div>
				
				</div>
			</div>
		</div>

<div id='cssmenu'>
<ul>
<li><a href='#'><span>Technical Events</span></a></li>
<li><a href='#'><span>Workshops</span></a></li>
<li><a href='#'><span>Skill Development Programs</span></a></li>

<li><a href='#'><span>Contact</span></a></li>
</ul>
</div>

<div class="main zerogrid">
<h2 class="indent-bot"> TECHNICAL EVENTS</h2>
				<article class="col-1-2"><div class="wrap-col">
									</div></article>		   
			</div>
		</div>
	</section>
<div id ="bdy" onclick = "check(event)" style="overflow:hidden;">
 
 <div id="abc">
 
	 <!-- Popup div starts here -->
 <div id="popupContact"> 

	<!-- contact us form -->
		<form action="#" method="post" id="form" >
			<img src="popimages/3.png" id="close"/>
			<h2>Contact Us</h2><hr/>
			<input type="text" name="name" id="name" placeholder="Name"/>
			
			<input type="text" name="email" id="email" placeholder="Email"/>
			
			<textarea name="message" placeholder="Message" id="msg"></textarea>
			
			<a id="submit" href="javascript: check_empty()">Send</a>
			
			<p><span>Note :</span> In this demo, we have stopped email sending functionality.</p>
		</form>
 </div> 
 <!-- Popup div ends here -->
 </div>
 <!-- display popup button --><CENTER>
    	        <button id = "popup" onclick ="div_show()">TECH VILLA</button></CENTER>
	<!-- Right side div -->
<center>
<button onclick="myFunction()">CODE MANIA</button></center>

<p id="demo"></p>

<script>
function myFunction() {
    var person = prompt("Please enter your name", "");
    
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today?";
    }
}
</script>
<center><button onclick="myFunction1()">TECH OPS</button></center>
<center>
<button onclick="myFunction()">C CHEF</button></center>

<p id="demo"></p>

<script>
function myFunction() {
    var person = prompt("Please enter your name", "");
    
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today?";
    }
}
</script>
<center><button onclick="myFunction1()">TECH OPS</button></center>
<script>
function myFunction1() {
    window.open("http://www.w3schools.com", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=400, height=400");
}
</script>



	<script type="text/javascript"> Cufon.now(); </script>


 
 </header>				
</html>