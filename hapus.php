<?php
include 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM produk WHERE id_prd = '{$id}'");
$result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pmb = '{$id}'");
$result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_trs = '{$id}'");
$result = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_bayar = '{$id}'");

header('location: index.php');
