<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pasien.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE  id_pasien=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
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
                        <h1>Data Pasien</h1>
                    </div>
                    <div class="form-group">
                        <p>Id Pasien</p>
                        <textarea id="pasien" name="pasien" rows="1" cols="40">
                      <?php echo $pasien["id_pasien"]; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                        <p>Nama Pasien</p>
                        <textarea id="nama" name="namaPasien" rows="1" cols="40">
                       <?php echo $pasien["nama_pasien"]; ?>
                       </textarea>
                    </div>
                    <div class="form-group">
                        <p>Alamat</p>
                        <textarea id="alamat" name="alamatPasien" rows="1" cols="40">
                      <?php echo $pasien["alamat"]; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                        <p>Jenis Kelamin</p>
                        <textarea id="jeniskelamin" name="jenisKelamin" rows="1" cols="40">
                        <?php echo $pasien["jenis_kelamin"]; ?>
                        </textarea>
                    </div>
                    <p><a href="list-pasien.php" class="btn btn-primary">Exit</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
