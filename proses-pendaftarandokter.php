<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $iddokter= $_POST['id_dokter'];
    $namadokter=$_POST['nama_dokter'];
    $nohpdokter= $_POST['no_hp_dokter'];
    $spesialis= $_POST['spesialis'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO dokter (id_dokter, nama_dokter, no_hp_dokter,spesialis,id_pasien) VALUE ('$iddokter', '$namadokter','$nohpdokter','$spesialis',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-dokter.php?status=sukses');
    } else {
     
        header('Location: list-dokter.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>