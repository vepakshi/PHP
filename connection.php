</?php

$connection=mysql_connect("localhost","","") or die("couldn't connect to the server:");
mysql_select_db("event",$connection) or die("couldn't connect to the database:");
?>