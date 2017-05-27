
    <?php
    session_start();
    include('connectionf.php');
   
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
   $Gender=$_POST['Gender'];
   $Collegename=$_POST['Collegename'];
   $Department=$_POST['Department'];
   $TeachingExperience=$_POST['TeachingExperience'];
   $IndustrialExperience=$_POST['Indusrialexperience'];
 
   $Address=$_POST['Address'];
   $Mobileno=$_POST['Mobileno'];
   $EmailId=$_POST['EmailId'];

  mysql_query("INSERT INTO faculty(FirstName,LastName,Gender,Collegename,Department,TeachingExperience,IndustrialExperience,Address,Mobileno,EmailId)VALUES('$FirstName','$LastName', '$Gender', '$Collegename', '$Department','$TeachingExperience', '$IndustrialExperience', '$Address', '$Mobileno', '$EmailId')");
  
  header("location: facultyreg.php?remarks=success");

     mysql_close($con);

 ?>

