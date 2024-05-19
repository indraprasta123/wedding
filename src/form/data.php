<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<title>Tabel Pemesanan</title>
	<?php
		include "../config/koneksi.php";
		include "../query/data.php";
	?>
</head>
<style>
	img {
		width: 100px;
	}
	.transaksi__title{
		display: flex;
	}
</style>
<body>
	.
	<div class="transaksi__title">
		<img src="../../public/images/icon/star.png">
		<h1>Data Telah berhasil</h1>
		<img src="../../public/images/icon/star.png">
	</div>
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<th>NAMA CPW/CPP</th>
			<th>NAMA ORTU</th>
			<th>ALAMAT</th>
			<th>TANGGAL</th>
			<th>WAKTU</th>
			<th>NO HP</th>
			<th>PAKET</th>
			<th>HARGA</th>
			<th>KETERANGAN</th>
			<th>OPSI</th>
		</thead>
		<?php 
		while ($hasil = mysqli_fetch_array($sql)) {
		?>
		<tbody>
			<td><?php echo $hasil['nama']; ?></td>
			<td><?php echo $hasil['nama_ortu']; ?></td>
			<td><?php echo $hasil['alamat']; ?></td>
			<td><?php echo $hasil['tanggal']; ?></td>
			<td><?php echo $hasil['waktu']; ?></td>
			<td><?php echo $hasil['no_hp']; ?></td>
			<td><?php echo $hasil['nama_paket']; ?></td>
			<td><?php echo $hasil['harga']; ?></td>
			<td><?php echo $hasil['keterangan']; ?></td>
			<td>
				<a href="../query/hapus.php?nama=<?php echo $hasil['nama']?>">Hapus</a>
				<a href="edit.php?nama=<?php echo $hasil ['nama'] ?>">Edit</a>
			</td>
		</tbody>
		<?php
			}
		?>
	</table>
	<?php
	echo "<a href='../../index.html' target='_blank' title='home'>Back to home</a>";
	?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
</body>
</html>