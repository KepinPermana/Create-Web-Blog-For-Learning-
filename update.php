<?php
include 'function.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$judul_artikel           = $_POST['judul_artikel'];
$nama_penulis            = $_POST['nama_penulis'];
$tanggal_publish         = $_POST['tanggal_publish'];
$artikel_satu            = $_POST['artikel_satu'];
$artikel_dua           = $_POST['artikel_dua'];
$artikel_tiga            = $_POST['artikel_tiga'];
$artikel_empat           = $_POST['artikel_empat'];
// query SQL untuk insert data
$query="UPDATE artikel SET judul_artikel='$judul_artikel', 
nama_penulis='$nama_penulis', 
tanggal_publish='$tanggal_publish', 
artikel_satu='$artikel_satu', 
artikel_dua='$artikel_dua',  
artikel_tiga='$artikel_tiga',
artikel_empat='$artikel_empat'
WHERE id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>