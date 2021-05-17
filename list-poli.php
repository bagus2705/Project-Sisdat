<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Poli</title>
</head>

<body style="background-color:#E0F3FE ">
    <header>
        <h3>List Poli</h3>
    </header>

    <nav>
        <a href="form-daftarpoli.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Poli</th>
            <th>Jenis Poli</th>
            <th>Id Pasien</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM poli";
        $query = mysqli_query($db, $sql);

        while($poli = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$poli['id_poli']."</td>";
            echo "<td>".$poli['jenis_poli']."</td>";
            echo "<td>".$poli['id_pasien']."</td>";
            
            

            echo "<td>";
            echo "<a href='viewpoli.php?id=".$poli['id_poli']."'>View</a> | ";
            echo "<a href='form-editpoli.php?id=".$poli['id_poli']."'>Edit</a> | ";
            echo "<a href='hapuspoli.php?id=".$poli['id_poli']."'>Hapus</a>";
           
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