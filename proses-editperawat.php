<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $perawat = $_POST['nama_perawat'];
    $jaga= $_POST['jam_jaga'];
    $alamat= $_POST['alamat'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE perawat SET nama_perawat='$perawat',jam_jaga='$jaga',alamat='$alamat',id_pasien='$idpasien'WHERE id_perawat=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-perawat.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>