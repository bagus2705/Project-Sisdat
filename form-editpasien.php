<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pasien.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE  id_pasien=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Pasien </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Pasien</h3>
    </header>
   
    <form action="proses-editpasien.php" method="POST">

        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $pasien['id_pasien'] ?>" />

        <p>
        
        <label for="nama_pasien">Nama: </label>
            <input type="text" name="nama_pasien" placeholder="nama lengkap" value="<?php echo $pasien['nama_pasien'] ?>" />
        </p>
        <p>
        
        <label for="alamat">Alamat: </label>
        <textarea name="alamat"><?php echo $pasien['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $pasien['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>