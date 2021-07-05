<?php

include("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id_bayar'];

    $id_bayar = $_POST['id_bayar'];
    $id_trs = $_POST['id_trs'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $jml_bayar = $_POST['jml_bayar'];

    // update user dataa
    $result = mysqli_query(
        $conn,
        "UPDATE pembayaran SET id_bayar='$id_bayar',id_trs='$id_trs',tgl_bayar='$tgl_bayar'jml_bayar='$jml_bayar' 
	WHERE id_bayar=$id"
    );

    header("Location: index.php");
}
?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styleubah.css" rel="stylesheet" type="text/css" />
        <title>Ubah Data Pembayaran</title>
    </head>

    <?php

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_bayar=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $id_bayar = $user_data['id_bayar'];
        $id_trs = $user_data['id_trs'];
        $tgl_bayar = $user_data['tgl_bayar'];
        $jml_bayar = $user_data['jml_bayar'];
    }
    ?>
    <?php include('header1.php'); ?>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form name="update_user" method="post" action="edit_pembayaran.php">
            <table border="0">
                <tr>
                    <td>ID Pembayaran</td>
                    <td><input type="text" name="id_bayar" value=<?php echo $id_bayar; ?>></td>
                </tr>
                <tr>
                    <td>ID Transaksi</td>
                    <td><input type="text" name="id_trs" value=<?php echo $id_trs; ?>></td>
                </tr>
                <tr>
                    <td>Tanggal Bayar</td>
                    <td><input type="text" name="tgl_bayar" value=<?php echo $tgl_bayar; ?>></td>
                </tr>
                <tr>
                    <td>Jumlah Bayar</td>
                    <td><input type="text" name="jml_bayar" value=<?php echo $jml_bayar; ?>></td>
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