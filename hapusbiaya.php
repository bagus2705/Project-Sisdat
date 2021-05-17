<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM biaya WHERE  id_biaya=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-biaya.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>