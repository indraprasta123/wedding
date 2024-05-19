<?php
//Include file koneksi
include "../config/koneksi.php";
//buat variabel yang berisi query
$query = "SELECT wedding.nama,wedding.nama_ortu,wedding.alamat,wedding.tanggal,wedding.waktu,wedding.no_hp,wedding.keterangan,paket.nama_paket,paket.harga FROM wedding INNER JOIN paket ON wedding.paket_id = paket.id";
// $query 	= "SELECT * FROM wedding order by nama ASC";
$sql 	= mysqli_query($koneksi,$query);
// $result = mysqli_fetch_array($sql);
// var_dump($result);

?>