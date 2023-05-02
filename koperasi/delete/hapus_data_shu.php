<?php
include('../../config/config.php') ;
$no_m = $_GET ['no_m'] ;
$query = mysqli_query($koneksi, "DELETE FROM tb_shu WHERE no_m='$no_m' ") ;
header('Location: ../halaman.php?page=shu-anggota') ;
?>