<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<?php
include('connection.php');
$penghuniList = getPenghuniList();

foreach ($penghuniList as $penghuni) {
    echo "<li>{$penghuni['nama']} - NIK: {$penghuni['nik']}, Alamat: {$penghuni['alamat']}, Jenis Kelamin: {$penghuni['jenis_kelamin']}<br>";
    if (!empty($penghuni['foto'])) {
        echo "<img src='{$penghuni['foto']}' alt='Foto Penghuni' style='max-width: 100px; max-height: 100px;'>";
    }
    echo " <a href='update.php?id={$penghuni['id_penghuni']}'>Edit</a> | <a href='delete.php?id={$penghuni['id_penghuni']}'>Hapus</a></li>";
}

$conn->close();
?>