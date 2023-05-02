<?php
include('../../config/config.php') ;
$no_m = $_POST['no_m'];
$jd = $_POST['jd'] ;
$ts = $_POST['ts'];
$hb = $_POST['hb'] ;
$query = mysqli_query($koneksi, "UPDATE tb_shu SET jumlah_dana='$jd' ,total_shu='$ts',hasil_bagi='$hb' WHERE no_m='$no_m'") ;
header('Location: ../halaman.php?page=shu-anggota') ;

?>