<?php

//connect to the database
mysql_connect ("localhost","root","") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("event") or die ('Cannot connect to the database: ' . mysql_error());

//query
$query = mysql_query("select FirstName, LastName from sree") or die ('Query is invalid: ' . mysql_error());

//write the results

while ($row = mysql_fetch_array($query)) {
	echo $row['FirstName'] . " " . $row['LastName'] . "
";
	
// close the loop
}

?>
