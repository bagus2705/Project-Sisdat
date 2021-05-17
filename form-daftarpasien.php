<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pasien</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Pasien</h3>
    </header>

    <form action="proses-pendaftaranpasien.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_pasien">Nama: </label>
            <input type="text" name="nama_pasien" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>