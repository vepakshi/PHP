
    <?php
    session_start();
    include('connection.php');
   
   $UserId=$_POST['UserId'];
   $Password=$_POST['Password'];
 
    

    mysql_query("INSERT INTO adminregister(UserId,Password)VALUES('$UserId','$Password');
  
  header("location:admin1.php?remarks=success");

     mysql_close($con);

 ?>

