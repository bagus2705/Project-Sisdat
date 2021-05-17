<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idperawat = $_POST['id_perawat'];
    $namaperawat= $_POST['nama_perawat'];
    $jamjaga = $_POST['jam_jaga'];
    $alamat= $_POST['alamat'];
    $idpasien = $_POST['id_pasien'];
 
    $sql = "INSERT INTO perawat (id_perawat, nama_perawat,jam_jaga,alamat,id_pasien) VALUE ('$idperawat', '$namaperawat','$jamjaga','$alamat',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-perawat.php?status=sukses');
    } else {
     
        header('Location: list-perawat.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>