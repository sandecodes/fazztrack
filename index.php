<?php 

require 'connection/connection.php';

$products = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazztrack</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="tambah.php">Tambah Data Produk</a><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($products as $product) : 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $product['nama_produk'] ?></td>
                <td><?= $product['keterangan'] ?></td>
                <td><?= $product['harga'] ?></td>
                <td><?= $product['jumlah'] ?></td>
                <td>
                    <a href="ubah.php?id=<?= $product['id'] ?>">Ubah</a>
                    <a href="hapus.php?id=<?= $product['id'] ?>" onclick="return confirm('Apakah yakin akan menghapus pada data ini???')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>