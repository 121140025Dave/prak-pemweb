<-Dave Nathanael Anthonius->
<-121140025->
<-RC->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Penghuni</title>
</head>
<body>
    <h2>Tambah Penghuni</h2>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br>

        <button type="submit">Tambah Penghuni</button>
    </form>

    <h2>Daftar Penghuni</h2>
    <ul>
        <?php include('read.php'); ?>
    </ul>
</body>
</html>