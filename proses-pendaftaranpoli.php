<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idpoli = $_POST['id_poli'];
    $jenispoli = $_POST['jenis_poli'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO poli (id_poli, jenis_poli,id_pasien) VALUE ('$idpoli', '$jenispoli',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-poli.php?status=sukses');
    } else {
     
        header('Location: list-poli.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>