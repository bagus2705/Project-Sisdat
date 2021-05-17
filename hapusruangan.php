<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM ruangan WHERE  id_kamar=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-ruangan.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>