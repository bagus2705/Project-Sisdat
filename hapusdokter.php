<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM dokter WHERE  id_dokter=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-dokter.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>