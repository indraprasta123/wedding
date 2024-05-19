<?php  
// Include file koneksi
include '../config/koneksi.php';
$queryPaket = "SELECT * FROM paket";
$paket = mysqli_query($koneksi,$queryPaket);

if (isset($_POST['kirim'])) {
 	
    //Buat variabel untuk menampung nilai/value dari form
    $nama 		= $_POST['nama'];
    $nama_ortu  = $_POST['nama_ortu'];
    $alamat		= $_POST['alamat'];
    $tanggal	= $_POST['tanggal'];
    $waktu		= $_POST['waktu'];
    $no_hp		= $_POST['no_hp'];
    $paket 	    = $_POST['paket'];
    $id         = $_POST['id'];

    //Buat variabel untuk membuat query/input ke database
    $query = "INSERT INTO wedding (nama, nama_ortu, alamat, tanggal, waktu, no_hp, paket_id, id) VALUES('$nama','$nama_ortu','$alamat','$tanggal','$waktu','$no_hp','$paket','$id') ";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo "<script>alert('Data Berhasil Ditambahkan');window.location='../form/check.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan');window.location='../form/form.php';</script>";
    }

}

?>