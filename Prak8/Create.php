<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    $foto = null;
    if ($_FILES["foto"]["error"] == 0) {
        $fotoName = $_FILES["foto"]["name"];
        $fotoPath = "uploads/" . $fotoName;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoPath);
        $foto = $fotoPath;
    }

    $result = addPenghuni($nik, $nama, $jenis_kelamin, $alamat, $foto);
    echo $result;

    header("Location: index.html");
}

$conn->close();
?>