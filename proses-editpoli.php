<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $jenispoli = $_POST['jenis_poli'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE poli SET jenis_poli='$jenispoli',id_pasien='$idpasien'WHERE id_poli=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-poli.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>