<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-perawat.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM perawat WHERE  id_perawat=$id";
$query = mysqli_query($db, $sql);
$perawat = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Perawat </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Perawat</h3>
    </header>

    <form action="proses-editperawat.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $perawat['id_perawat'] ?>" />
            <p>
        <label for="nama_perawat ">Nama Perawat: </label>
            <input type="text" name="nama_perawat" value="<?php echo $perawat['nama_perawat'] ?>" />
            </p>
            <p>
        <label for="jam_jaga ">Jam Jaga: </label>
            <input type="text" name="jam_jaga" value="<?php echo $perawat['jam_jaga'] ?>" />
            </p>
            <p>
        <label for="alamat ">Alamat: </label>
            <input type="text" name="alamat" value="<?php echo $perawat['alamat'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $perawat['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>