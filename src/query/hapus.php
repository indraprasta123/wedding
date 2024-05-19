<?php 
include '../config/koneksi.php';

$nama =$_GET['nama'];

$query ="DELETE FROM wedding WHERE nama=('$nama')";

$sql = mysqli_query($koneksi,$query);
    if ($sql) {
        echo "<script>
        alert('Data berhasil dihapus');
        window.location='../form/data.php';
        </script>";
    }
 ?>