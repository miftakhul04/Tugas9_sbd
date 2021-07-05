<?php

include("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id_pmb'];

    $id_pmb = $_POST['id_pmb'];
    $nama_pmb = $_POST['nama_pembeli'];
    $no_tlf = $_POST['no_tlf'];
    $alamat = $_POST['alamat'];

    $result = mysqli_query(
        $conn,
        "UPDATE pembeli SET id_pmb='$id_pmb',nama_pmb='$nama_pmb',no_tlf='$no_tlf,alamat='$alamat' 
	WHERE id_pmb=$id"
    );

    header("Location: index.php");
}
?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styleubah.css" rel="stylesheet" type="text/css" />
        <title>Ubah Data Pembeli</title>
    </head>

    <?php

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pmb=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $id_pmb = $user_data['id_pmb'];
        $nama_pmb = $user_data['nama_pmb'];
        $no_tlf = $user_data['no_telp'];
        $alamat = $user_data['alamat'];
    }
    ?>
    <html>
    <?php include('header1.php'); ?>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form name="update_user" method="post" action="edit_pembeli.php">
            <table border="0">
                <tr>
                    <td>ID Pembeli</td>
                    <td><input type="text" name="id_pmb" value=<?php echo $id_pmb; ?>></td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input type="text" name="nama_pmb" value=<?php echo $nama_pmb; ?>></td>
                </tr>
                <tr>
                    <td>No Telpon</td>
                    <td><input type="text" name="no_tlf" value=<?php echo $no_tlf; ?>></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                    </>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php include('footer.php'); ?>

    </html>