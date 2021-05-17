<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idmedis = $_POST['id_rekam_medis'];
    $diagnosa = $_POST['diagnosa'];
    $keluhan=$_POST['keluhan'];
    $kondisi=$_POST['cek_kondisi_fisik'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO rekam_medis (id_rekam_medis, diagnosa, keluhan,cek_kondisi_fisik,id_pasien) VALUE ('$idmedis', '$diagnosa','$keluhan','$kondisi',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-medis.php?status=sukses');
    } else {
     
        header('Location: list-medis.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>