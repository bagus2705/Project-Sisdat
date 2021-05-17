<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    
    $idbiaya = $_POST['id_biaya'];
    $jumlah = $_POST['jumlah_biaya'];
    $tglbayar=$_POST['tgl_bayar'];
    $idpasien = $_POST['id_pasien'];

 
    $sql = "INSERT INTO biaya (id_biaya, jumlah_biaya, tgl_bayar,id_pasien) VALUE ('$idbiaya', '$jumlah','$tglbayar',$idpasien)";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-biaya.php?status=sukses');
    } else {
     
        header('Location: list-biaya.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>