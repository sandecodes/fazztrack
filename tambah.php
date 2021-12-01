<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah-proses.php" method="post">
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama_produk">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah">
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>
                    <textarea name="keterangan" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Simpan</button>
                    <button type="reset" name="batal">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>