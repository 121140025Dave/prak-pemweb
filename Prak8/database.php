<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kostanku";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>