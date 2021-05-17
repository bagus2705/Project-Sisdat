<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Biaya</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Biaya</h3>
    </header>

    <form action="proses-pendaftaranbiaya.php" method="POST">

        <fieldset>
        
        <p>
            <label for="jumlah_biaya ">Jumlah Biaya: </label>
            <input type="text" name="jumlah_biaya"/>
        </p>
        <p>
            <label for="tgl_bayar ">Tanggal Bayar: </label>
            <input type="text" name="tgl_bayar"/>
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