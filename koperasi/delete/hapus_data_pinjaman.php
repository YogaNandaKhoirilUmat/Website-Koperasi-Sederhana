<?php
include('../../config/config.php') ;
$no_p = $_GET ['no_p'] ;
$query = mysqli_query($koneksi, "DELETE FROM tb_pinjaman WHERE no_p='$no_p' ") ;
header('Location: ../halaman.php?page=pinjaman-anggota') ;
?>