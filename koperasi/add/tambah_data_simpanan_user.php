<?php
include('../../config/config.php') ;
$status= $_POST['status'] ;
$js =$_POST['js'] ;
$jsi= $_POST['jsi'] ;
$ts = $_POST['ts'] ;

$query = mysqli_query($koneksi,"INSERT INTO tb_simpanan(no_s,status_s,jumlah_simpanan,jenis_simpanan,tanggal_simpan) VALUES ('','$status','$js','$jsi','$ts' )") ;
header('location: ../halaman.php?page=simpanan-anggota-user');
?>