<?php
include "koneksi.php";

$id_produk = $_GET['id_produk'];

$query = "SELECT * FROM produk WHERE id_produk='" . $id_produk . "'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM produk WHERE id_produk='" . $id_produk . "'";
$sql2 = mysqli_query($connect, $query2);

if ($sql2) {
	header("location: index.php");
} else {
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
