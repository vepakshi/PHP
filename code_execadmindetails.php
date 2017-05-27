
    <?php
    session_start();
    include('connectionadmindetails.php');
   
   $EventName=$_POST['EventName'];
   $EventDate=$_POST['EventDate'];
   $EventDescription=$_POST['EventDescription'];
   $Depatment=$_POST['Department'];
   $Coordinator1=$_POST['Coordinator1'];
   $Coordinator2=$_POST['Coordinator2'];
   $ResourcePerson=$_POST['ResourcePerson'];
   $Venue=$_POST['Venue'];
 
   $ContactEmailId=$_POST['ContactEmailId'];
 

  mysql_query("INSERT INTO faculty(EventName,EventDate,EventDescription,Department,Coordinator1,Coordinator2,ResourcePerson,Venue,ContactEmailId)VALUES('$EventName','$EventDate', '$EventDescription', '$Department','$Coordinator1', '$Coordinator2', '$ResourcePerson', '$Venue', '$ContactEmailId')");
  
  header("location: admindetails.php?remarks=success");

     mysql_close($con);

 ?>

