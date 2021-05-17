<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Ruangan</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Ruangan</h3>
    </header>

    <form action="proses-pendaftaranruangan.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_kamar">Nama Kamar: </label>
            <input type="text" name="nama_kamar"/>
        </p>
        <p>
            <label for="tarif_kamar ">Tarif Kamar: </label>
            <input type="text" name="tarif_kamar"/>
        </p>
        <p>
            <label for="jenis_kamar ">Jenis Kamar: </label>
            <input type="text" name="jenis_kamar"/>
            </p>
        <p>
            <label for="id_pasien ">Id Pasien: </label>
            <input type="text" name="id_pasien"/>
            </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>