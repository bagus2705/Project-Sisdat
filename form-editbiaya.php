<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-biaya.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM biaya WHERE  id_biaya=$id";
$query = mysqli_query($db, $sql);
$biaya = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Biaya </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Biaya</h3>
    </header>

    <form action="proses-editbiaya.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $biaya['id_biaya'] ?>" />
            
        <p>
        <label for="jumlah_biaya">Jumlah Biaya: </label>
            <input type="text" name="jumlah_biaya" value="<?php echo $biaya['jumlah_biaya'] ?>" />
        </p>
        <p>
        <label for="tgl_bayar ">Tanggal Bayar: </label>
            <input type="text" name="tgl_bayar" value="<?php echo $biaya['tgl_bayar'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $biaya['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>