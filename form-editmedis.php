<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-perawat.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM rekam_medis WHERE  id_rekam_medis=$id";
$query = mysqli_query($db, $sql);
$medis = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Rekam Medis </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Rekam Medis</h3>
    </header>

    <form action="proses-editmedis.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $medis ['id_rekam_medis'] ?>" />
            <p>
        <label for="diagnosa ">Diagnosa: </label>
            <input type="text" name="diagnosa" value="<?php echo $medis ['diagnosa'] ?>" />
            </p>
            <p>
        <label for="keluhan ">Keluhan: </label>
            <input type="text" name="keluhan" value="<?php echo $medis ['keluhan'] ?>" />
            </p>
            <p>
        <label for="cek_kondisi_fisik ">Kondisi Fisik: </label>
            <input type="text" name="cek_kondisi_fisik" value="<?php echo $medis ['cek_kondisi_fisik'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $medis['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>