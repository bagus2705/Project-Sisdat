<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-dokter.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dokter WHERE  id_dokter=$id";
$query = mysqli_query($db, $sql);
$dokter = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Dokter </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Dokter</h3>
    </header>

    <form action="proses-editdokter.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $dokter['id_dokter'] ?>" />
            
        <p>
        <label for="nama_dokter">Nama Dokter: </label>
            <input type="text" name="nama_dokter" value="<?php echo $dokter['nama_dokter'] ?>" />
        </p>
        <p>
        <label for="no_hp_dokter ">No HP Dokter: </label>
            <input type="text" name="no_hp_dokter" value="<?php echo $dokter['no_hp_dokter'] ?>" />
            </p>
            <p>
        <label for="spesialis ">Spesialis: </label>
            <input type="text" name="spesialis" value="<?php echo $dokter['spesialis'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $dokter['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>