<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $diagnosa = $_POST['diagnosa'];
    $keluhan= $_POST['keluhan'];
    $kondisifisik= $_POST['cek_kondisi_fisik'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE rekam_medis SET diagnosa='$diagnosa',keluhan='$keluhan',cek_kondisi_fisik='$kondisifisik',id_pasien='$idpasien'WHERE id_rekam_medis=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-medis.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>