<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM perawat WHERE  id_perawat=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-perawat.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>