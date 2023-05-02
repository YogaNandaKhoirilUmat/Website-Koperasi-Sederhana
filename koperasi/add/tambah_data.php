<?php
include('../../config/config.php') ;

$nik = $_POST['nik'] ;
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'] ;
$email= $_POST['email'] ;
$query = mysqli_query($koneksi, "INSERT INTO tb_anggota (nik, nama, pekerjaan, email) VALUES ('$nik','$nama','$pekerjaan','$email')") ;
header('Location: ../halaman.php?page=data-anggota') ;
?>