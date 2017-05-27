
    <?php
    session_start();
    include('connections.php');
   
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
   $Gender=$_POST['Gender'];
   $Collegename=$_POST['Collegename'];
   $Rollno=$_POST['Rollno'];
   $Programme=$_POST['Programme'];
   $Branch=$_POST['Branch'];
   $Year=$_POST['Year'];
   $Semester=$_POST['Semester'];
   $Address=$_POST['Address'];
   $Mobileno=$_POST['Mobileno'];
   $EmailId=$_POST['EmailId'];

  mysql_query("INSERT INTO sree(FirstName,LastName,Gender,Collegename,Rollno,Programme,Branch,Year,Semester,Address,Mobileno,EmailId)VALUES('$FirstName','$LastName', '$Gender', '$Collegename', '$Rollno','$Programme', '$Branch', '$Year', '$Semester', '$Address', '$Mobileno', '$EmailId')");
  
  header("location: studentreg.php?remarks=success");

     mysql_close($con);

 ?>

