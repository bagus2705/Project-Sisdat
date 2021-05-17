<?php

include("config.php");


if(isset($_POST['simpan'])){

 
    $id = $_POST['id'];
    $nama = $_POST['nama_pasien'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];

  
    $sql = "UPDATE pasien SET nama_pasien='$nama', alamat='$alamat', jenis_kelamin='$jk' WHERE id_pasien=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        
        header('Location: list-pasien.php');
    } else {
       
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>