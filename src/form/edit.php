<?php
include '../config/koneksi.php';
include '../query/edit.php';
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
			<?php
			$nama =$_GET['nama'];
			$query = "SELECT * FROM wedding WHERE  nama=('$nama')";
			$sql =mysqli_query($koneksi, $query);
			while ($return = mysqli_fetch_array($sql))
				{
			?>
			<div class="box">
				<img src="LOGO_PUTIN.png"class="icon">
				<form method="POST" action="../query/edit.php" class="formulir-form">
					<div class="formulir-item">
						<label>NAMA CPW/CPP :</label>
						<input type="text" name="nama" value="<?php echo $return['nama'] ?>" placeholder="Masukan Nama">
					</div>
					<div class="formulir-item">
						<label>NAMA ORTU :</label>
						<input type="text" name="nama_ortu" value="<?php echo $return['nama_ortu'] ?>" placeholder="Masukan Nama Ortu">
					</div>
					<div class="formulir-item">
						<label>ALAMAT :</label>
						<input type="text" name="alamat" value="<?php echo $return['alamat'] ?>" placeholder="Masukan Alamat">
					</div>
					<div class="formulir-item">
						<label>TANGGAL :</label>
						<input type="date" value="<?php echo $return['tanggal'] ?>" name="tanggal">
					</div>
					<div class="formulir-item">
						<label>WAKTU :</label>
						<input type="time" value="<?php echo $return['waktu'] ?>" name="waktu">
					</div>
					<div class="formulir-item">
						<label>NO HP :</label>
						<input type="text" value="<?php echo $return['no_hp'] ?>" name="no_hp" placeholder="Masukan No HP">
					</div>
					<div class="formulir-item">
						<label>PAKET</label>
						<select value="<?php echo $return['paket'] ?>" name="paket">
						
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
					<button type="submit" name="simpan" class="kirim">Kirim</button>
				</form>
			</div>
			<?php
            }
        ?>
		</div>
	</section>
</body>

</html>