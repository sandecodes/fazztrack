<?php 

require 'connection/connection.php';

if(isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $simpan = mysqli_query($conn, "INSERT INTO produk VALUES ('','$nama_produk','$keterangan','$harga','$jumlah')");

    if ($simpan) {
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        header ("refresh:0;index.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan!')</script>";
        header ("refresh:0;index.php");
    }
}

?>