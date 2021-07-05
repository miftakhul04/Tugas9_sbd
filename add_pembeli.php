<?php include('header.php'); ?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styletambah.css" rel="stylesheet" type="text/css" />
        <title>Tambah Data Pembeli</title>
    </head>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form action="add_pembeli.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>ID Pembeli</td>
                    <td><input type="text" name="id_pmb"></td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input type="text" name="nama_pmb"></td>
                </tr>
                <tr>
                    <td>No Telpon</td>
                    <td><input type="text" name="no_tlf"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
                </tr>
            </table>
        </form>

        <?php

        if (isset($_POST['Submit'])) {
            $id_pmb = $_POST['id_pmb'];
            $nama_pmb = $_POST['nama_pmb'];
            $no_telp = $_POST['no_telp'];
            $alamat = $_POST['alamat'];

            include("koneksi.php");

            $result = mysqli_query($conn, "INSERT INTO pembeli(id_pmb,nama_pmb,no_telp,alamat) 
		VALUES('$id_pmb','$nama_pmb','$no_telp','$alamat')");

            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
    </body>
    <?php include('footer.php'); ?>

    </html>