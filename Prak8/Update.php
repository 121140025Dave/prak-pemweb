<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_penghuni = $_GET["id"];
    $penghuni = getPenghuniById($id_penghuni);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_penghuni = $_POST["id_penghuni"];
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    // Upload foto (diasumsikan disimpan di folder 'uploads')
    $foto = null;
    if ($_FILES["foto"]["error"] == 0) {
        $fotoName = $_FILES["foto"]["name"];
        $fotoPath = "uploads/" . $fotoName;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoPath);
        $foto = $fotoPath;
    }

    $result = updatePenghuni($id_penghuni, $nik, $nama, $jenis_kelamin, $alamat, $foto);
    echo $result;

    header("Location: index.html");
}

$conn->close();
?>