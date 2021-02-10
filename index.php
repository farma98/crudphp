<html>

<head>
	<title>Mahfudin Dwi P</title>
</head>

<body>
	<h1>Data Barang</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
		<tr>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Keterangan</th>
			<th>Jumlah</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM produk";
		$sql = mysqli_query($connect, $query);

		while ($data = mysqli_fetch_array($sql)) {
			echo "<tr>";
			echo "<td>" . $data['id_produk'] . "</td>";
			echo "<td>" . $data['nama_produk'] . "</td>";
			echo "<td>" . $data['harga'] . "</td>";
			echo "<td>" . $data['jumlah'] . "</td>";
			echo "<td>" . $data['keterangan'] . "</td>";
			echo "<td><a href='form_ubah.php?id_produk=" . $data['id_produk'] . "'>Ubah</a></td>";
			echo "<td><a href='proses_hapus.php?id_produk=" . $data['id_produk'] . "'>Hapus</a></td>";
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>