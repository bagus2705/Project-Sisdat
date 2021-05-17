<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-ruangan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM ruangan WHERE  id_kamar=$id";
$query = mysqli_query($db, $sql);
$ruangan= mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Ruangan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        h1 {text-align: center;font-family:graduate;font-size:300%;color:black}
        textarea {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
p {text-align: center;}
    </style>
</head>
<body  style="background-color:#E0F3FE">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Data Ruangan</h1>
                    </div>
                    <div class="form-group">
                        <p>Id Kamar</p>
                        <textarea id="Kamar" name="Kamar" rows="1" cols="40">
                      <?php echo $ruangan["id_kamar"]; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                        <p>Nama Kamar</p>
                        <textarea id="namaKamar" name="namaKamar" rows="1" cols="40">
                       <?php echo $ruangan["nama_kamar"]; ?>
                       </textarea>
                    </div>
                    <div class="form-group">
                        <p>Tarif Kamar</p>
                        <textarea id="TarifKamar" name="TarifKamar" rows="1" cols="40">
                      <?php echo $ruangan["tarif_kamar"]; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                        <p>Jenis Kamar</p>
                        <textarea id="jeniskamar" name="jenisKamar" rows="1" cols="40">
                        <?php echo $ruangan['jenis_kamar']; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                    <p>Id Pasien</p>
                        <textarea id="pasien" name="pasien" rows="1" cols="40">
                      <?php echo $ruangan["id_pasien"]; ?>
                        </textarea>
                    </div>
                    <p><a href="list-ruangan.php" class="btn btn-primary">Exit</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
