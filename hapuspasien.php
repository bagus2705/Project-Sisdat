<?php

include("config.php");

if( isset($_GET['id']) ){

   
    $id = $_GET['id'];

    
    $sql = "DELETE FROM pasien WHERE  id_pasien=$id";
    $query = mysqli_query($db, $sql);


    if( $query ){
        header('Location: list-pasien.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>