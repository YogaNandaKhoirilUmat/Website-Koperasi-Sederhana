<?php
include('../../config/config.php') ;
$nik = $_GET ['nik'] ;
$query = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE nik='$nik' ") ;
header('Location: ../halaman.php?page=data-anggota') ;
?>