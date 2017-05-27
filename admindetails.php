<?php
session_start();
 include'header.php';?>
<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>

</head>
<form name="reg1"  action="code_exec.php"  onSubmit="return validateForm()" method="post"><fieldset>
<legend></legend>
<center>
<table>
<pre>
<tr><td>Event Name</td><td>:</td><td><input type="text" name="EventName"></td></tr><tr></tr><tr></tr>
<tr><td>Event Date</td><td>:</td><td dir="rtl">:From</td>
<td><input type="text"  id="inputField" /></td></tr><tr></tr><tr></tr>
</tr><tr></tr><tr></tr>
<tr><td>Event Date</td><td>:</td><td dir="rtl">:To</td>
<td><input type="text"  id="inputField" /></td></tr><tr></tr><tr></tr>
</tr><tr></tr><tr></tr>

<tr><td>Event Description</td><td>:</td><td><input type="text" name="EventDescription"></td></tr><tr></tr><tr></tr>
<tr><td>Deaprtment</td><td>:</td><td><input type="text" name="Department"></td></tr><tr></tr><tr></tr>
<tr><td>Coordinator1</td><td>:</td><td><input type="text" name="Coordinator1"></td></tr><tr></tr><tr></tr>
<tr><td>Coordinator2</td><td>:</td><td><input type="text" name="Coordinator2"></td></tr><tr></tr><tr></tr>
<tr><td>Resource Person</td><td>:</td><td><input type="text" name="ResourcePerson"></td></tr><tr></tr><tr></tr>
<tr><td>Venue</td><td>:</td><td><input type="text" name="Venue"></td></tr><tr></tr><tr></tr>
<tr><td>Contact EmailId</td><td>:</td><td><input type="email" name="ContactEmailId" autocomplete="off"></td></tr><tr></tr><tr></tr>
<tr><td></td><td></td><td><input type="submit" value="submit">&nbsp&nbsp<input type="reset" value="reset"></td></tr><tr></tr><tr></tr>
</pre>
</table>
</fieldset>
</form>
</body>


<script type="text/javascript">
    function validateForm()
    {

    var a=document.forms["reg1"]["EventName"].value;
    var b=document.forms["reg1"]["EventDate"].value;
    var c=document.forms["reg1"]["EventDescription"].value;
    var d=document.forms["reg1"]["Department"].value;
    var e=document.forms["reg1"]["Coordinator1"].value;
    var f=document.forms["reg1"]["Coordinator2"].value;
    var g=document.forms["reg1"]["ResourcePerson"].value;
    var h=document.forms["reg1"]["Venue"].value;
    var i=document.forms["reg1"]["ContactEmailId"].value;
    

    if ( (a==null || a=="") && (b==null || b=="")&& (c==null || c=="") && (d==null || d=="")&& (e==null || e=="")&& (f==null || f=="")&& (g==null || g=="")&& (h==null || h=="")&& (i==null || i==""))
    {
    alert("All Fields must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("EventName must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Event Date must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("EventDescription must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Department must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("Coordinator1 must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("Coordinator2 must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("ResourcePerson must be filled out");
    return false;
    }
    if (h==null || h=="")
    {
    alert("Venue must be filled out");
    return false;
    }
    if (i==null || i=="")
    {
    alert("ContactEmailId must be filled out");
    return false;
    }
    
    }

</script>
</html>