<?php
include '../config/koneksi.php';
include '../query/form.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"href="../../public/style/scss/index.css">
	<title>Form Pemesanan PUTIN</title>
</head>
<body>
	<section class="formulir">
		<div class="container">
			<h2 class="formulir-title">Silahkan isi Formulir Pemesanan</h2>
			<div class="box">
				<img src="LOGO_PUTIN.png"class="icon">
				<form method="POST" action="../query/form.php" class="formulir-form">
					<div class="formulir-item">
						<label>NAMA CPW/CPP :</label>
						<input type="text" name="nama" placeholder="Masukan Nama">
					</div>
					<div class="formulir-item">
						<label>NAMA ORTU :</label>
						<input type="text" name="nama_ortu" placeholder="Masukan Nama Ortu">
					</div>
					<div class="formulir-item">
						<label>ALAMAT :</label>
						<input type="text" name="alamat" placeholder="Masukan Alamat">
					</div>
					<div class="formulir-item">
						<label>TANGGAL :</label>
						<input type="date" name="tanggal">
					</div>
					<div class="formulir-item">
						<label>WAKTU :</label>
						<input type="time" name="waktu">
					</div>
					<div class="formulir-item">
						<label>NO HP :</label>
						<input type="text" name="no_hp" placeholder="Masukan No HP">
					</div>
					<div class="formulir-item">
						<label>PAKET</label>
						<select name="paket">
						
						<option disabled selected> Pilih </option> 	
						<?php 
						while ($hasil = mysqli_fetch_array($paket)) {
						?>			
							<option value=<?php echo $hasil['id']; ?>><?php echo $hasil['nama_paket']; ?></option>		
						<?php
						}
						?>	
						</select>
					</div>
					<button type="submit" name="kirim" class="kirim">Kirim</button>
				</form>
			</div>
		</div>
	</section>
</body>

</html>