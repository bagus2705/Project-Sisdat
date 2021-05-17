<?php

include("config.php");

if( isset($_GET['id']) ){

  
    $id = $_GET['id'];

    
    $sql = "DELETE FROM poli WHERE  id_poli=$id";
    $query = mysqli_query($db, $sql);

 
    if( $query ){
        header('Location: list-poli.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>