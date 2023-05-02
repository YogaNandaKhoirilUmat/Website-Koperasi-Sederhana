<?php
include('../../config/config.php') ;
$no_m = $_POST['no_m'];
$jc = $_POST['jc'] ;
$jp = $_POST['jp'];
$sc = $_POST['sc'] ;
$query = mysqli_query($koneksi, "UPDATE tb_cicilan SET jumlah_cicilan='$jc' ,jumlah_pembayaran='$jp',sisa_cicilan='$sc' WHERE no_m='$no_m'") ;
header('Location: ../halaman.php?page=cicilan-anggota') ;

?>