<?php
$no_s  = $_GET['no_s'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_simpanan WHERE no_s='$no_s'");
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
              <form method='post' action='update/update_data_simpanan.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Inputjumlahsimpanan">Jumlah Simpanan</label>
                    <input type="text" class="form-control" id="Inputjumlahsimpanan" placeholder="jumlah simpanan" name = 'js' value="<?php echo $view ['jumlah_simpanan']; ?> ">
                    <input type="text" class="form-control" id="Inputjumlahsimpanan" placeholder="jumlah simpanan" name = 'no_s' value="<?php echo $view ['no_s']; ?> " hidden>
                  
                      <div class="col-sm-5">
                      <!-- select -->
                      <div class="form-group">
                    <label>Jenis Simpanan</label>
                    <select class="custom-select" id="selectjenissimpanan" name='jsi'>
                    <option  >Pokok</option>
                    <option >Wajib</option>
                    <option >Sukarela</option>
                    <option >Pendidikan</option>
                    <option >Qurban</option>
                        </select>
                      </div>
                    </div>
                  
                <!-- /.card-body -->

                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
    </div>
 </div>
</section>



            