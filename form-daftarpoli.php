<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Poli</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Poli</h3>
    </header>

    <form action="proses-pendaftaranpoli.php" method="POST">

        <fieldset>
        <p>
            <label for="jenis_poli">Jenis Poli: </label>
            <input type="text" name="jenis_poli"/>
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