<?php include('header.php'); ?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styletambah.css" rel="stylesheet" type="text/css" />
        <title>Tambah Data Produk</title>
    </head>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form action="add_produk.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>ID Produk</td>
                    <td><input type="text" name="id_prd"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama_prd"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga_prd"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok_prd"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
                </tr>
            </table>
        </form>

        <?php


        if (isset($_POST['Submit'])) {
            $id_prd = $_POST['id_prd'];
            $nama_prd = $_POST['nama_prd'];
            $harga_prd = $_POST['harga_prd'];
            $stok_prd = $_POST['stok_prd'];

            include("koneksi.php");

            $result = mysqli_query($conn, "INSERT INTO produk(id_prd,nama_prd,harga_prd,stok_prd) 
		VALUES('$id_prd','$nama_prd','$harga_prd','$stok_prd')");

            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
    </body>
    <?php include('footer.php'); ?>

    </html>