<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Perawat</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List Perawat</h3>
    </header>

    <nav>
        <a href="form-daftarperawat.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Perawat</th>
            <th>Nama Perawat</th>
            <th>Jam Jaga</th>
            <th>Alamat</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM perawat";
        $query = mysqli_query($db, $sql);

        while($perawat = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$perawat['id_perawat']."</td>";
            echo "<td>".$perawat['nama_perawat']."</td>";
            echo "<td>".$perawat['jam_jaga']."</td>";
            echo "<td>".$perawat['alamat']."</td>";
            echo "<td>".$perawat['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewperawat.php?id=".$perawat['id_perawat']."'>View</a> | ";
            echo "<a href='form-editperawat.php?id=".$perawat['id_perawat']."'>Edit</a> | ";
            echo "<a href='hapusperawat.php?id=".$perawat['id_perawat']."'>Hapus</a>";
           
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