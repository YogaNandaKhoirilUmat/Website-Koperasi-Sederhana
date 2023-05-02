<?php
include('../../config/config.php') ;
$jc =$_POST['jc'] ;
$jp= $_POST['jp'] ;
$tp= $_POST['tp'] ;
$sc = $_POST['sc'] ;

$query = mysqli_query($koneksi,"INSERT INTO tb_cicilan(no_m,jumlah_cicilan,jumlah_pembayaran,tanggal_pembayaran,sisa_cicilan) VALUES ('','$jc','$jp','$tp','$sc' )") ;
header('location: ../halaman.php?page=cicilan-anggota-user');
?>