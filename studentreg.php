<?php
 include'studentheader.php';?>
<html>



<form name="reg" action="code_execs.php" onSubmit="return validateForm()" method="post"><fieldset>
<center>
<table>
<pre>
<tr><td>FirstName</td><td>:</td><td><input type="text" name="FirstName"></td></tr><tr></tr><tr></tr>
<tr><td> LastName</td><td>:</td><td><input type="text" name="LastName"></td></tr><tr></tr><tr></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="Gender" value="Male">Male
<input type="radio" name="Gender" value="Female">Female</td></tr><tr></tr><tr></tr>
<tr><td>Collegename</td><td>:</td><td><input type="text" name="Collegename"></td></tr><tr></tr><tr></tr>
<tr><td>Rollno</td><td>:</td><td><input type="text" name="Rollno" ></td></tr><tr></tr><tr></tr>
<tr><td>Programme</td><td>:</td><td><select name="Programme"><option value="B.Tech">B.Tech</option><option value="M.Tech">M.Tech</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<option value="Degree">Degree</option>
</select>
<tr><td>Branch</td><td>:</td><td><select name="Branch"><option value="ECE">ECE</option><option value="EEE">EEE</option>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="CIVIL">CIVIL</option>
<option value="MECH">MECH</option>
</select>
<tr><td>YearSemester</td><td>:</td><td><select name="Year"><option value="I">I Year</option><option value="II">II year</option>
<option value="III">III year</option>
<option value="IV">IV year</option>
</select><select name="Semester"><option value="">
<option value="I">I sem</option>
<option value="II">II sem</option></select></td></tr><tr></tr><tr></tr>
<tr><td>Address</td><td>:</td><td><textarea name="Address" rows="8" cols="30"></textarea></td></tr><tr></tr><tr></tr>
<tr><td>Mobileno</td><td>:</td><td><input type="text" name="Mobileno" ></td></tr><tr></tr><tr></tr>
<tr><td>EmailId</td><td>:</td><td><input type="email" name="EmailId " autocomplete="off"></td></tr><tr></tr><tr></tr>
<tr><td></td><td></td><td><input type="submit" value="submit">&nbsp&nbsp<input type="reset" value="reset"></td></tr><tr></tr><tr></tr>
</pre>

</table>
</fieldset></center>
</form>

<script type="text/javascript">
    function validateForm()
    {
     var a=document.forms["reg"]["FirstName"].value;
    var b=document.forms["reg"]["LastName"].value;
    var c=document.forms["reg"]["Gender"].value;
    var d=document.forms["reg"]["Collegename"].value;
    var e=document.forms["reg"]["Rollno"].value;
    var f=document.forms["reg"]["Programme"].value;
    var g=document.forms["reg"]["Branch"].value;
       
   if ( (a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") )
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
    alert("Rollno must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("Programme must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("Branch must be filled out");
    return false;
    }
    
 }

</script>
</html>