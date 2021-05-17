<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-ruangan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM ruangan WHERE  id_kamar=$id";
$query = mysqli_query($db, $sql);
$ruangan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Ruangan </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Ruangan</h3>
    </header>

    <form action="proses-editruangan.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $ruangan['id_kamar'] ?>" />
            
        <p>
        <label for="nama_kamar">Nama: </label>
            <input type="text" name="nama_kamar" value="<?php echo $ruangan['nama_kamar'] ?>" />
        </p>
        <p>
        <label for="tarif_kamar ">Tarif Kamar: </label>
            <input type="text" name="tarif_kamar" value="<?php echo $ruangan['tarif_kamar'] ?>" />
            </p>
        <p>
        <label for="jenis_kamar ">Jenis Kamar: </label>
            <input type="text" name="jenis_kamar" value="<?php echo $ruangan['jenis_kamar'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $ruangan['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>