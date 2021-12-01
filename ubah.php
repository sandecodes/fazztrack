<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    require 'connection/connection.php';

    $id = $_GET['id'];
    $products = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id'");
    while($product = mysqli_fetch_array($products)) {
    ?>
    <form action="ubah-proses.php" method="post">
        <table cellpadding="10" cellspacing="0">
            <input type="hidden" name="id" value="<?= $product['id']; ?>">
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama_produk" value="<?= $product['nama_produk']; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" value="<?= $product['harga']; ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah" value="<?= $product['jumlah']; ?>">
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>
                    <textarea name="keterangan" cols="30" rows="10"><?= $product['keterangan']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="ubah">Ubah</button>
                    <button type="reset" name="batal">Batal</button>
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>