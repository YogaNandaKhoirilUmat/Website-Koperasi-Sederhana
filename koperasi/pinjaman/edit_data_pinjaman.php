<?php
$no_p  = $_GET['no_p'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_pinjaman WHERE no_p='$no_p'");
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
              <form method='post' action='update/update_data_pinjaman.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Inputjumlahpinjaman">Jumlah pinjaman</label>
                    <input type="text" class="form-control" id="Inputjumlahpinjaman" placeholder="jumlah pinjaman" name = 'jp' value="<?php echo $view ['jumlah_pinjaman']; ?> ">
                    <input type="text" class="form-control" id="Inputjumlahpinjaman" placeholder="jumlah pinjaman" name = 'no_p' value="<?php echo $view ['no_p']; ?> " hidden>
                    </div>

                  <div class="form-group">
                    <label for="Inputtempo">Tempo</label>
                    <input type="text" class="form-control" id="Inputtempo" placeholder="tempo" name = 'tempo' value="<?php echo $view ['tempo']; ?> ">
                  </div>
                
                  <div class="form-group">
                    <label for="Inputangsuran">Angsuran</label>
                    <input type="text" class="form-control" id="Inputangsuran" placeholder="angsuran" name = 'angsuran' value="<?php echo $view ['angsuran']; ?> ">
                  </div>
                  
                <!-- /.card-body -->

                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
    </div>
</section>



            