<html>

<head>
	<title>Mahfudin Dwi Prasetyo</title>
</head>

<body>
	<h1>Ubah Data Barang</h1>

	<?php
	include "koneksi.php";

	$id_produk = $_GET['id_produk'];

	$query = "SELECT * FROM produk WHERE id_produk='" . $id_produk . "'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>

	<form method="post" action="proses_ubah.php?id_produk=<?php echo $id_produk; ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" value="<?php echo $data['harga']; ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="keterangan"><?php echo $data['keterangan']; ?></textarea></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Ubah">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>

</html>