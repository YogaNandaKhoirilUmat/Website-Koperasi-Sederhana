<?php
include('../../config/config.php') ;
$no_s = $_GET ['no_s'] ;
$query = mysqli_query($koneksi, "DELETE FROM tb_simpanan WHERE no_s='$no_s' ") ;
header('Location: ../halaman.php?page=simpanan-anggota') ;
?>