<?php 

require "connection/connection.php";

$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM produk WHERE id = '$id'");
header ("refresh:0; index.php");

?>