<?php
include('../../config/config.php') ;
$no_s = $_POST['no_s'];
$js = $_POST['js'] ;
$jsi = $_POST['jsi'];
$query = mysqli_query($koneksi, "UPDATE tb_simpanan SET jumlah_simpanan='$js' ,jenis_simpanan='$jsi' WHERE no_s='$no_s'") ;
header('Location: ../halaman.php?page=simpanan-anggota') ;

?>