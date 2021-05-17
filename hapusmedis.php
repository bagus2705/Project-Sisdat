<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM rekam_medis WHERE  id_rekam_medis=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-medis.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>