<?php include('koneksi.php'); ?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Sistem Penjualan</title>
    </head>
    <?php include('header.php'); ?>

    <h3>TABEL PRODUK</h3>
    <a href="add_produk.php">TAMBAH DATA BARU</a><br /><br />
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama produk</th>
                <th>Harga Produk</th>
                <th>Stok Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  produk';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <center><?php echo $row['id_prd'] ?></center>
                    </td>
                    <td><?php echo $row['nama_prd'] ?></td>
                    <td>
                        <center><?php echo $row['harga_prd'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['stok_prd'] ?></center>
                    </td>
                    <td>
                        <a class="btn btn-success" href="edit_produk.php?id=<?= $row['id_prd']; ?>"><button>UBAH</button></a> |
                        <a href="hapus.php?id=<?= $row['id_prd']; ?>"><button>HAPUS</button></a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <h3>TABEL PEMBELI</h3>
    <a href="add_pembeli.php">TAMBAH DATA BARU</a><br /><br />
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>No Telpon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  pembeli';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <center><?php echo $row['id_pmb'] ?></center>
                    </td>
                    <td><?php echo $row['nama_pmb'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><a href="edit_pembeli.php?id=<?= $row['id_pmb']; ?>"><button>UBAH</button></a> |
                        <a href="hapus.php?id=<?= $row['id_pmb']; ?>"><button>HAPUS</button></a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <h3>TABEL TRANSAKSI</h3>
    <a href="add_transaksi.php">TAMBAH DATA BARU</a><br /><br />
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Produk</th>
                <th>ID Pembeli</th>
                <th>Jumlah Produk</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaksi';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <center><?php echo $row['id_trs'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['id_prd'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['id_pmb'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['jml_prd'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['keterangan'] ?></center>
                    </td>
                    <td><a href="edit_transaksi.php?id=<?= $row['id_trs']; ?>"><button>UBAH</button></a> |
                        <a href="hapus.php?id=<?= $row['id_trs']; ?>"><button>HAPUS</button></a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <h3>TABEL PEMBAYARAN</h3>
    <a href="add_pembayaran.php">TAMBAH DATA BARU</a><br /><br />
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Tanggal bayar</th>
                <th>Total bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  pembayaran';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <center><?php echo $row['id_bayar'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['id_trs'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['tgl_bayar'] ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['jml_bayar'] ?></center>
                    </td>
                    <td><a href="edit_pembayaran.php?id=<?= $row['id_bayar']; ?>"><button>UBAH</button></a> |
                        <a href="hapus.php?id=<?= $row['id_bayar']; ?>"><button>HAPUS</button></a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <?php include('footer.php'); ?>