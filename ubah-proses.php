<?php 
require 'connection/connection.php';

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama_produk = addslashes($_POST['nama_produk']);
    $keterangan = addslashes($_POST['keterangan']);
    $harga = addslashes($_POST['harga']);
    $jumlah = addslashes($_POST['jumlah']);

    $update = mysqli_query($conn, "UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' WHERE id = '$id'");

    if ($update) {
        echo "<script>alert('Data berhasil di ubah')</script>";
        header ("refresh:0;index.php");
    } else {
        echo "<script>alert('Data gagal di ubah')</script>";
        header ("refresh:0;index.php");
    }
}
?>