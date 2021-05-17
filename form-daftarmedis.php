<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Medis</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>Formulir Pendaftaran Medis</h3>
    </header>

    <form action="proses-pendaftaranmedis.php" method="POST">

        <fieldset>
        
        <p>
            <label for="diagnosa"> Diagnosa: </label>
            <input type="text" name="diagnosa"/>
        </p>
        <p>
            <label for="keluhan">Keluhan: </label>
            <input type="text" name="keluhan"/>
            </p>
        <p>
            <label for="cek_kondisi_fisik">Kondis Fisik: </label>
            <input type="text" name="cek_kondisi_fisik"/>
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