<?php

include("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id_prd'];

    $id_prd = $_POST['id_prd'];
    $nama_prd = $_POST['nama_prd'];
    $harga_prd = $_POST['harga_prd'];
    $stok_prd = $_POST['stok_prd'];

    $result = mysqli_query(
        $conn,
        "UPDATE produk SET id_prd='$id_prd',nama_prd='$nama_prd',harga_prd='$harga_prd',stok_prd='$stok_prd' 
	WHERE id_prd=$id"
    );

    header("Location: index.php");
}
?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styleubah.css" rel="stylesheet" type="text/css" />
        <title>Ubah Data Produk</title>
    </head>

    <?php

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM produk WHERE id_prd=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $id_prd = $user_data['id_prd'];
        $nama_prd = $user_data['nama_prd'];
        $harga_prd = $user_data['harga_prd'];
        $stok_prd = $user_data['stok_prd'];
    }
    ?>
    <?php include('header1.php'); ?>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form name="update_user" method="post" action="edit_produk.php">
            <table border="0">
                <tr>
                    <td>ID Produk</td>
                    <td><input type="text" name="id_prd" value=<?php echo $id_prd; ?>></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama_prd" value=<?php echo $nama_prd; ?>></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga_prd" value=<?php echo $harga_prd; ?>></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok_prd" value=<?php echo $stok_prd; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php include('footer.php'); ?>

    </html>