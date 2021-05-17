<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-resep.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM resep_obat WHERE  id_resep=$id";
$query = mysqli_query($db, $sql);
$resep = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Resep </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Resep</h3>
    </header>

    <form action="proses-editresep.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $resep['id_resep'] ?>" />
            <p>
        <label for="nama_resep ">Nama Resep: </label>
            <input type="text" name="nama_resep" value="<?php echo $resep['nama_resep'] ?>" />
            </p>
            <p>
        <label for="nama_obat ">Nama Obat: </label>
            <input type="text" name="nama_obat" value="<?php echo $resep['nama_obat'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $resep['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>