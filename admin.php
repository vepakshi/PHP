
<html >

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
								<li ><a href="events.php">Events</a><strong></strong></li>
								<li><a href="registrations.php">Registrations</a><strong></strong></li>
								<li><a href="workshops.php">Workshops</a><strong></strong></li>
								<li class="last"><a href="contacts.php">Contacts</a><strong></strong></li>
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
						<strong class="title-1">Welcome Admin!!!</strong>
						
					</div>
				</div></article>
				<div class="clear"></div>
			</div>
<form name="reg" action="adminreg.php" onsubmit="return validate()" method="post"><fieldset><fieldset>
<legend></legend>
<center>
<table>
<pre>
<tr><td>User ID</td><td>:</td><td><input type="text" name="UserId"></td></tr><tr></tr><tr></tr>

<tr><td>Password</td><td>:</td><td><input type="password" name="Password"></td></tr><tr></tr><tr></tr>

<tr><td></td><td></td><td><input type="submit" value="submit">&nbsp&nbsp<input type="reset" value="reset"></td></tr><tr></tr><tr></tr>
</pre>
</table>
<script language="javascript">
function validate()
{

	var id,pass,pass1;
	id=document.reg.UserId.value;
        pass=document.reg.Password.value;


	if(id=='satyajit' && pass=='satya123')
	{

		return true;
	}
    else if(id=='rahul' && pass=='rahul123')
	{

		return true;
	}
   else if(id=='saikat' && pass=='saikat123')
	{

		return true;
	}

	else
	alert("please check the Id/password");
		return false;


}
</script>

</fieldset>
</form>
</body>
</html>