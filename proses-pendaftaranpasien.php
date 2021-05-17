<?php

include("config.php");


if(isset($_POST['daftar'])){


    $nama = $_POST['nama_pasien'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];

  
    $sql = "INSERT INTO pasien (nama_pasien, alamat, jenis_kelamin) VALUE ('$nama', '$alamat', '$jk')";
    $query = mysqli_query($db, $sql);



    if( $query ) {
       
        header('Location: list-pasien.php?status=sukses');
    } else {
      
        header('Location: list-pasien.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>