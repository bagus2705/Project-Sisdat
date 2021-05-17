<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM resep_obat WHERE  id_resep =$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-resep.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>