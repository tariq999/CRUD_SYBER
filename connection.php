<?php 
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cyber_form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
 //echo "Connection Ok";
}
else{
    echo "Connection Failed".mysqli_connect_error();
}
?> 
