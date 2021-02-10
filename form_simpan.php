<html>

<head>
	<title>Mahfudin Dwi P</title>
</head>

<body>
	<h1>Tambah Data Barang</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>ID Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="keterangan"></textarea></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>

</html>