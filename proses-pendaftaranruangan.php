<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idkamar = $_POST['id_kamar'];
    $nama = $_POST['nama_kamar'];
    $tarif=$_POST['tarif_kamar'];
   $jenis=$_POST['jenis_kamar'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO ruangan (id_kamar, nama_kamar, tarif_kamar,jenis_kamar,id_pasien) VALUE ('$idkamar', '$nama',$tarif,'$jenis',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-ruangan.php?status=sukses');
    } else {
     
        header('Location: list-ruangan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>