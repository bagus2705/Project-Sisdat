<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List biaya</title>
</head>

<body style="background-color:#E0F3FE">
    <header>
        <h3>List biaya</h3>
    </header>

    <nav>
        <a href="form-daftarbiaya.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Biaya</th>
            <th>Jumlah Biaya</th>
            <th>Tanggal Bayar</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM biaya";
        $query = mysqli_query($db, $sql);

        while($biaya = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$biaya['id_biaya']."</td>";
            echo "<td>".$biaya['jumlah_biaya']."</td>";
            echo "<td>".$biaya['tgl_bayar']."</td>";
            echo "<td>".$biaya['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewbiaya.php?id=".$biaya['id_biaya']."'>View</a> | ";
            echo "<a href='form-editbiaya.php?id=".$biaya['id_biaya']."'>Edit</a> | ";
            echo "<a href='hapusbiaya.php?id=".$biaya['id_biaya']."'>Hapus</a>";
           
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