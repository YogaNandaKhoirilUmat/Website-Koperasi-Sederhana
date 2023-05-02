<?php
$nik   = $_GET['nik'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE nik='$nik'");
$view  = mysqli_fetch_array($query) ;
?>
<section class="content">
      <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method='post' action='update/update_data.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNik">NIK</label>
                    <input type="text" class="form-control" id="InputNik" placeholder="NIK" name = 'nik' value="<?php echo $view ['nik']; ?> ">
                   
                  </div>
                  <div class="form-group">
                    <label for="InputNama">NAMA</label>
                    <input type="text" class="form-control" id="InputNama" placeholder="NAMA" name = 'nama' value="<?php echo $view ['nama']; ?> ">
                  </div>
                  <div class="form-group">
                    <label for="InputKerja">Pekerjaan</label>
                    <input type="text" class="form-control" id="InputKerja" placeholder="Pekerjaan" name = 'pekerjaan' value="<?php echo $view ['pekerjaan']; ?> ">
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Email" name = 'email' value="<?php echo $view ['email']; ?> ">
                  </div>
                <!-- /.card-body -->

                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
    </div>
</section>


