<?php
 include'facultyheader.php';?>
<html>
<form name="reg1"  action="code_execf.php"  onSubmit="return validateForm()" method="post"><fieldset>
<legend></legend>
<center>
<table>
<pre>
<tr><td>First Name</td><td>:</td><td><input type="text" name="FirstName"></td></tr><tr></tr><tr></tr>
<tr><td> Last Name</td><td>:</td><td><input type="text" name="LastName"></td></tr><tr></tr><tr></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="Gender" value="male">Male
<input type="radio" name="Gender" value="female">Female</td></tr><tr></tr><tr></tr>
<tr><td>Collegename</td><td>:</td><td><input type="text" name="Collegename"></td></tr><tr></tr><tr></tr>
<tr><td>Deaprtment</td><td>:</td><td><input type="text" name="Department"></td></tr><tr></tr><tr></tr>
<tr><td>TeachingExperience</td><td>:</td><td><input type="text" name="TeachingExperience"></td></tr><tr></tr><tr></tr>
<tr><td>IndustrialExperience</td><td>:</td><td><input type="text" name="IndustrialExperience"></td></tr><tr></tr><tr></tr>

<tr><td>Address</td><td>:</td><td><textarea name="Address" rows="8" cols="30"></textarea></td></tr><tr></tr><tr></tr>
<tr><td>Mobileno</td><td>:</td><td><input type="text" name="Mobileno"></td></tr><tr></tr><tr></tr>
<tr><td>EmailId</td><td>:</td><td><input type="email" name="EmailId" autocomplete="off"></td></tr><tr></tr><tr></tr>
<tr><td></td><td></td><td><input type="submit" value="submit">&nbsp&nbsp<input type="reset" value="reset"></td></tr><tr></tr><tr></tr>
</pre>
</table>
</fieldset>
</form>
</body>
<script type="text/javascript">
    function validateForm()
    {

    var a=document.forms["reg1"]["FirstName"].value;
    var b=document.forms["reg1"]["LastName"].value;
    var c=document.forms["reg1"]["Gender"].value;
    var d=document.forms["reg1"]["Collegename"].value;
    var e=document.forms["reg1"]["Department"].value;
    var f=document.forms["reg1"]["TeachingExperience"].value;
    var g=document.forms["reg1"]["IndustrialExperience"].value;
    var h=document.forms["reg1"]["Address"].value;
    var i=document.forms["reg1"]["Mobileno"].value;
    var j=document.forms["reg1"]["EmailId"].value;

    if ( (a==null || a=="") && (b==null || b=="")&& (c==null || c=="") && (d==null || d=="")&& (e==null || e=="")&& (f==null || f=="")&& (g==null || g=="")&& (h==null || h=="")&& (i==null || i=="")&& (j==null || j==""))
    {
    alert("All Fields must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("FirstName must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("LastName must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Gender must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Collegename must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("Department must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("TeachingExperience must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("IndustrialExperience must be filled out");
    return false;
    }
    if (h==null || h=="")
    {
    alert("Address must be filled out");
    return false;
    }
    if (i==null || i=="")
    {
    alert("Mobileno must be filled out");
    return false;
    }
    if (j==null || j=="")
    {
    alert("EmailId must be filled out");
    return false;
    }
    }

</script>
</html>