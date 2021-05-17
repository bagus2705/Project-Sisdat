<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idresep = $_POST['id_resep'];
    $namaresep= $_POST['nama_resep'];
    $namaobat = $_POST['nama_obat'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO resep_obat (id_resep, nama_resep, nama_obat,id_pasien) VALUE ('$idresep', '$namaresep','$namaobat',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-resep.php?status=sukses');
    } else {
     
        header('Location: list-resep.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>