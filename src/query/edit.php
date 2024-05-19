<?php
include '../config/koneksi.php';

$queryPaket = "SELECT * FROM paket";
$paket = mysqli_query($koneksi,$queryPaket);

if (isset($_POST['simpan'])) {

    $nama 		= $_POST['nama'];
    $nama_ortu  = $_POST['nama_ortu'];
    $alamat		= $_POST['alamat'];
    $tanggal	= $_POST['tanggal'];
    $waktu		= $_POST['waktu'];
    $no_hp		= $_POST['no_hp'];
    
$query = "UPDATE wedding SET  nama = '$nama' , nama_ortu = '$nama_ortu' alamat = '$alamat' , tanggal = '$tanggal', waktu = '$waktu', no_hp = '$no_hp' WHERE nama = ('$nama')";
$sql = mysqli_query($koneksi,$query);

    if ($sql) {
        echo "<script>alert('data berhasil di update');
        window.location='../form/data.php';</script>";
    } else {
        echo "jhfvjfhvj";
        // echo "<script>alert('data gagal diupdate');
        // window.location='../form/.php';</script>";
    }
}
?>