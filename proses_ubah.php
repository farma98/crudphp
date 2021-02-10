<?php

include "koneksi.php";

$id_produk = $_GET['id_produk'];

$nama_produk = $_POST['nama_produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$query = "SELECT * FROM produk WHERE id_produk='" . $id_produk . "'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE produk SET nama_produk='" . $nama_produk . "', keterangan='" . $keterangan . "', harga='" . $harga . "', jumlah='" . $jumlah . "' WHERE id_produk='" . $id_produk . "'";
$sql = mysqli_query($connect, $query);

if ($sql) {
	header("location: index.php");
} else {
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
