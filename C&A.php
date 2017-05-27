<?php
include'header.php';
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'reg.php';

// set a max file size for the html upload form
$max_file_size = 50000; // size in bytes

// now echo the html page
?>
<html>
<head>
       <title>Student Registration</title>

<link rel="stylesheet" href="jquery-ui.css">
<link href="jquery-ui.css" rel="stylesheet">
	<script src="jquery.min.js"></script>
	<script src="jquery-ui.min.js"></script>


</head>
<body  behavior="fixed">
<center> <h3 class="suck">Student Registration Form</h3></center>
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<center>
<form name="p1" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data"  method="POST" onSubmit="return validate1()">
<table class="reg">
<tr>
<td class="reg1">
<p>Name:<span style="color :red;">*</span></p>
</td>
<td><input type="text" name="f1" id="j1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="">
</td>
</tr>

<tr>
<td class="reg1"><p>Address:<span style="color :red;">*</span></p></td>
<td><textarea width="50px" height="50px" name="f3" id="j3" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="" >
</textarea>
</td>
</tr>

<tr>
<td class="reg1"><p>Gender:</p></td>
<td><select name="dropdowlist" id="sex">
<option value=""></option>
<option>
<?php $b=array('male','female');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1">
<p>College Name:<span style="color :red;">*</span></p>
</td>
<td><input type="text" name="f1" id="j1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="" >
</td>
</tr>
<tr>
<td class="reg1">
<p>Roll No.:<span style="color :red;">*</span></p>
</td>
<td><input type="text" name="f1" id="j1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="">
</td>
</tr>
<tr><td class="reg1"><p>Branch:<span style="color :red;">*</span></p></td>
<td>
<select name="f9" id="state"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value=""></option>
<option >
<?php $o=array('IT','CSE','ECE','EEE');

foreach($o as $z1)
{ ?>
   <option value="<?php echo$z1;?>">
   <?php echo $z1;?> </option>
   <?php
}
?>
</select></td></tr>
<tr>
<td class="reg1"><p>emailid:<span style="color :red;">*</span></p></td>
<td><input type="text" id="emailid"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" name="f7" value="" ></td></tr>
<tr><td class="reg1"><p>ContactNo:<span style="color :red;">*</span></p></td>
<td><input type="number" name="cno1" id="cno1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="" ></td></tr>

<tr><td class="reg1"><p>password:<span style="color :red;">*</span></p></td>
<td><input type="password" name="f10" id="j7" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="" </td></tr>
<tr><td><p>
            <label for="submit"></label></p></td>
            <td><p><input id="submit" class="rc-button-red" type="submit" name="submit" size="4" value="Submit">
        </p></td>
        <td><input type="reset" class="rc-button-red" size="4" value="Reset"></td></tr>
<script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#33FF33";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
function validate1()
{

	var e,e1,gender,name,add,branch,cno,ph;
	
    gender=document.getElementById('gender');
   
    branch=document.getElementById('branch');
	e=document.getElementById('emailid')
	e1=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     var letters =/^[0-9a-zA-Z]+$/;
     var nm = /^[A-Za-z]+$/;
     name=document.getElementById('j1');
    
     add=document.getElementById('j3');
     cno=document.getElementById('cno1');
     ph=/^\d{10}$/;

	

     if(gender=='' || gender.value=="")
	{
		alert("gender FIELD IS BLANK....");
          sex.focus();
		return false;
	}
   
    else if(age=='' || age.value=="")
	{
		alert("PLEASE PROVIDE AGE...");
           age.focus();
		return false;
	}
    else if(branch=='' || branch.value=="")
	{
		alert("PLEASE PROVIDE BRANCH...");
           state.focus();
		return false;
	}
	else if(!e1.test(e.value))
	{
		alert("Please provide a valid email address");
         e.focus();
		return false;
	}
   else if(!nm.test(name.value))
	{
		alert("Please provide a valid name no Space between names");
         name.focus();
		return false;
	}
   
    else if(!letters.test(add.value))
	{
		alert("Please provide a valid Address");
         add.focus();
		return false;
	}
      else if(!ph.test(cno.value))
 {
   alert(" Your Mobile Number must be 1 to 10 Integers");
    cno.focus();
    return false;
 }
	else
		return true;


}
</script>
</table>

    </form></center>
   </body>



