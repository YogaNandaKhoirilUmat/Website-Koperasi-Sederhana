<?php
include('../../config/config.php') ;
$no_p = $_POST['no_p'];
$jp = $_POST['jp'] ;
$tempo = $_POST['tempo'];
$angsuran = $_POST['angsuran'] ;
$query = mysqli_query($koneksi, "UPDATE tb_pinjaman SET jumlah_pinjaman='$jp' ,tempo='$tempo',angsuran='$angsuran' WHERE no_p='$no_p'") ;
header('Location: ../halaman.php?page=pinjaman-anggota') ;

?>