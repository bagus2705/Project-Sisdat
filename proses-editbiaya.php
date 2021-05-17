<?php

include("config.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $jumlahbiaya = $_POST['jumlah_biaya'];
    $tglbayar= $_POST['tgl_bayar'];
    $idpasien=$_POST['id_pasien'];


    $sql = "UPDATE biaya SET jumlah_biaya='$jumlahbiaya',tgl_bayar='$tglbayar',id_pasien='$idpasien'WHERE id_biaya=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
  
        header('Location: list-biaya.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>