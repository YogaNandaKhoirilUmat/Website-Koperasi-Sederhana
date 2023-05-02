<?php
include('../../config/config.php') ;
$status= $_POST['status'] ;
$jp =$_POST['jp'] ;
$tempo= $_POST['tempo'] ;
$angsuran= $_POST['angsuran'] ;
$tp = $_POST['tp'] ;

$query = mysqli_query($koneksi,"INSERT INTO tb_pinjaman(no_p,status_p,jumlah_pinjaman,tempo,angsuran,tanggal_pinjam) VALUES ('','$status','$jp','$tempo','$angsuran','$tp' )") ;
header('location: ../halaman.php?page=pinjaman-anggota-user');
?>