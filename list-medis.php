<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Rekam Medis</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List Rekam Medis</h3>
    </header>

    <nav>
        <a href="form-daftarmedis.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Rekam Medis</th>
            <th>Diagnosa </th>
            <th>Keluhan</th>
            <th>Kondisi Fisik</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM rekam_medis";
        $query = mysqli_query($db, $sql);

        while($medis = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$medis['id_rekam_medis']."</td>";
            echo "<td>".$medis['diagnosa']."</td>";
            echo "<td>".$medis['keluhan']."</td>";
            echo "<td>".$medis['cek_kondisi_fisik']."</td>";
            echo "<td>".$medis['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewmedis.php?id=".$medis['id_rekam_medis']."'>View</a> | ";
            echo "<a href='form-editmedis.php?id=".$medis['id_rekam_medis']."'>Edit</a> | ";
            echo "<a href='hapusmedis.php?id=".$medis['id_rekam_medis']."'>Hapus</a>";
           
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <p><a href="menuutama.php" class="btn btn-primary">Main Menu</a></p>
    </body>
</html>