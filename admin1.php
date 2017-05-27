<?php
 include'header.php';?>
<html>



<form name="reg" action="code_execa.php" onSubmit="return validateForm()" method="post"><fieldset>
<center>
<table>
<pre>
<tr><td>UserId</td><td>:</td><td><input type="text" name="UserId" ></td></tr><tr></tr><tr></tr>
<tr><td> Password</td><td>:</td><td><input type="password" name="Password" ></td></tr><tr></tr><tr></tr>

<tr><td></td><td></td><td><input type="submit" value="submit">&nbsp&nbsp<input type="reset" value="reset"></td></tr><tr></tr><tr></tr>
</pre>
</table>
</fieldset>
</form>
<script type="text/javascript">
    function validateForm()
    {
   
    var a=document.forms["reg"]["UserId"].value;
    var b=document.forms["reg"]["Password"].value;
   
   if ( (a==null || a=="") && (b==null || b=="") )
    {
    alert("All Fields must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("UserId must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Password must be filled out");
    return false;
    }
    
    }

</script>
</html>