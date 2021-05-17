<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama_kamar'];
    $tarif = $_POST['tarif_kamar'];
    $jenis = $_POST['jenis_kamar'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE ruangan SET nama_kamar='$nama', tarif_kamar='$tarif',jenis_kamar ='$jenis',id_pasien='$idpasien'WHERE id_kamar=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-ruangan.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>