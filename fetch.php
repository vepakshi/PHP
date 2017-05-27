<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT FirstName, LastName FROM sree';

mysql_select_db('event');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "FirstName :{$row['FirstName']}  <br> ".
         "LastName : {$row['LastName']} <br> ".
         
         "--------------------------------<br>";
} 
mysql_free_result($retval);
echo "Fetched data successfully\n";
mysql_close($conn);
?>