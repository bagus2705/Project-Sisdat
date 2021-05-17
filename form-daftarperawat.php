<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Perawat</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Perawat</h3>
    </header>

    <form action="proses-pendaftaranperawat.php" method="POST">

        <fieldset>
            <p>
            <label for="nama_perawat">Nama Perawat: </label>
            <input type="text" name="nama_perawat"/>
            </p>
        <p>
            <label for="jam_jaga">Jam Jaga: </label>
            <input type="text" name="jam_jaga"/>
            </p>
            <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat"/>
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