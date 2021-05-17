<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $namadokter = $_POST['nama_dokter'];
    $hpdokter= $_POST['no_hp_dokter'];
    $spesialis= $_POST['spesialis'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE dokter SET nama_dokter='$namadokter',no_hp_dokter='$hpdokter',spesialis='$spesialis',id_pasien='$idpasien'WHERE id_dokter=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-dokter.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>