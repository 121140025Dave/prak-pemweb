<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_penghuni = $_GET["id"];
    $result = deletePenghuni($id_penghuni);
    echo $result;

    header("Location: index.html");
}

$conn->close();
?>