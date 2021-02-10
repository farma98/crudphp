<?php
include "koneksi.php";

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO produk VALUES(' ','" . $id_produk . "', '" . $nama_produk . "', '" . $keterangan . "', '" . $harga . "', '" . $jumlah . "')";
$sql = mysqli_query($connect, $query);

if ($sql) {
	header("location: index.php");
} else {
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
