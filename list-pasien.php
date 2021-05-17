<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Pasien</title>
</head>

<body style="background-color:#E0F3FE ">
    <header>
        <h3>List Pasien</h3>
    </header>

    <nav>
        <a href="form-daftarpasien.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pasien";
        $query = mysqli_query($db, $sql);

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pasien['id_pasien']."</td>";
            echo "<td>".$pasien['nama_pasien']."</td>";
            echo "<td>".$pasien['alamat']."</td>";
            echo "<td>".$pasien['jenis_kelamin']."</td>";
            

            echo "<td>";
           
            echo "<a href='viewpasien.php?id=".$pasien['id_pasien']."'>View</a> | ";
            echo "<a href='form-editpasien.php?id=".$pasien['id_pasien']."'>Edit</a> | ";
            echo "<a href='hapuspasien.php?id=".$pasien['id_pasien']."'>Hapus</a>";
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