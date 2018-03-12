<?php 
include("config.php"); 

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die 
('Error connecting to mysql');

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
  
if (!mysql_select_db($dbname)) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

?>