<?php
include('../../config/config.php') ;

$jd =$_POST['jd'] ;
$ts= $_POST['ts'] ;
$hb = $_POST['hb'] ;

$query = mysqli_query($koneksi,"INSERT INTO tb_shu(no_m,jumlah_dana,total_shu,hasil_bagi) VALUES ('','$jd','$ts','$hb' )") ;
header('location: ../halaman.php?page=shu-anggota-user');
?>