<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Dokter</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Dokter</h3>
    </header>

    <form action="proses-pendaftarandokter.php" method="POST">

        <fieldset>
        
        <p>
            <label for="nama_dokter"> Nama Dokter: </label>
            <input type="text" name="nama_dokter"/>
        </p>
        <p>
            <label for="no_hp_dokter">No HP Dokter: </label>
            <input type="text" name="no_hp_dokter"/>
            </p>
            <p>
            <label for="spesialis">Spesialis: </label>
            <input type="text" name="spesialis"/>
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