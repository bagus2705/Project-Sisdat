<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List ruangan</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List Ruangan</h3>
    </header>

    <nav>
        <a href="form-daftarruangan.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Kamar</th>
            <th>Nama Kamar</th>
            <th>Tarif Kamar</th>
            <th>Jenis Kamar</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM ruangan";
        $query = mysqli_query($db, $sql);

        while($ruangan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$ruangan['id_kamar']."</td>";
            echo "<td>".$ruangan['nama_kamar']."</td>";
            echo "<td>".$ruangan['tarif_kamar']."</td>";
            echo "<td>".$ruangan['jenis_kamar']."</td>";
            echo "<td>".$ruangan['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewruangan.php?id=".$ruangan['id_kamar']."'>View</a> | ";
            echo "<a href='form-editruangan.php?id=".$ruangan['id_kamar']."'>Edit</a> | ";
            echo "<a href='hapusruangan.php?id=".$ruangan['id_kamar']."'>Hapus</a>";
           
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