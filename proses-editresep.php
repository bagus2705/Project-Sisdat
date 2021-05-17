<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $resep = $_POST['nama_resep'];
    $obat= $_POST['nama_obat'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE resep_obat SET nama_resep='$resep',nama_obat='$obat',id_pasien='$idpasien'WHERE id_resep=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-resep.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>