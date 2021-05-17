<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Resep</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Resep</h3>
    </header>

    <form action="proses-pendaftaranresep.php" method="POST">

        <fieldset>
        
        <p>
            <label for="nama_resep"> Nama Resep: </label>
            <input type="text" name="nama_resep"/>
        </p>
        <p>
            <label for="nama_obat">Nama Obat: </label>
            <input type="text" name="nama_obat"/>
            </p>
        <p>
            <label for="id_pasien">Id Pasien: </label>
            <input type="text" name="id_pasien"/>
            </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>