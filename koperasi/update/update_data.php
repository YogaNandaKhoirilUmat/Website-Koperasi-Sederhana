<?php
include('../../config/config.php') ;
$nik = $_POST['nik'] ;
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'] ;
$email= $_POST['email'] ;
$query = mysqli_query($koneksi, "UPDATE tb_anggota SET nik='$nik' ,nama='$nama' ,pekerjaan='$pekerjaan',email='$email' WHERE nik='$nik' ") ;
header('Location: ../halaman.php?page=data-anggota') ;

?>