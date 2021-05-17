<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-dokter.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM poli WHERE  id_poli=$id";
$query = mysqli_query($db, $sql);
$poli = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Poli </title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Edit Poli</h3>
    </header>

    <form action="proses-editpoli.php" method="POST">
        
        <fieldset>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $poli['id_poli'] ?>" />
            <p>
        <label for="jenis_poli ">Jenis Poli: </label>
            <input type="text" name="jenis_poli" value="<?php echo $poli['jenis_poli'] ?>" />
            </p>
        <p>
        <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"value="<?php echo $poli['id_pasien'] ?>" />
        
            <input type="submit" value="Simpan" name="simpan" /> 
        </p>

        </fieldset>


    </form>

    </body>
</html>