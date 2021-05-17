<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Dokter</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List Dokter</h3>
    </header>

    <nav>
        <a href="form-daftardokter.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Dokter</th>
            <th>Nama Dokter</th>
            <th>No Hp Dokter</th>
            <th>Spesialis</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM dokter";
        $query = mysqli_query($db, $sql);

        while($dokter = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$dokter['id_dokter']."</td>";
            echo "<td>".$dokter['nama_dokter']."</td>";
            echo "<td>".$dokter['no_hp_dokter']."</td>";
            echo "<td>".$dokter['spesialis']."</td>";
            echo "<td>".$dokter['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewdokter.php?id=".$dokter['id_dokter']."'>View</a> | ";
            echo "<a href='form-editdokter.php?id=".$dokter['id_dokter']."'>Edit</a> | ";
            echo "<a href='hapusdokter.php?id=".$dokter['id_dokter']."'>Hapus</a>";
           
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