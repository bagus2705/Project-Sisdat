<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Resep</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List Resep</h3>
    </header>

    <nav>
        <a href="form-daftarresep.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Resep</th>
            <th>Nama Resep</th>
            <th>Nama Obat</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM resep_obat";
        $query = mysqli_query($db, $sql);

        while($resep = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$resep['id_resep']."</td>";
            echo "<td>".$resep['nama_resep']."</td>";
            echo "<td>".$resep['nama_obat']."</td>";
            echo "<td>".$resep['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewresep.php?id=".$resep['id_resep']."'>View</a> | ";
            echo "<a href='form-editresep.php?id=".$resep['id_resep']."'>Edit</a> | ";
            echo "<a href='hapusresep.php?id=".$resep['id_resep']."'>Hapus</a>";
           
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