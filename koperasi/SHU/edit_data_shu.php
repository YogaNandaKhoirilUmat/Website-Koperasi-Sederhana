<?php
$no_m  = $_GET['no_m'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_shu WHERE no_m='$no_m'");
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
              <form method='post' action='update/update_data_shu.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Inputjumlahdana">Jumlah Dana</label>
                    <input type="text" class="form-control" id="Inputjumlahdana" placeholder="jumlah dana" name = 'jd' value="<?php echo $view ['jumlah_dana']; ?> ">
                    <input type="text" class="form-control" id="Inputjumlahdana" placeholder="jumlah dana" name = 'no_m' value="<?php echo $view ['no_m']; ?> " hidden>
                    </div>

                  <div class="form-group">
                    <label for="Inputts">Total SHU</label>
                    <input type="text" class="form-control" id="Inputts" placeholder="ts" name = 'ts' value="<?php echo $view ['total_shu']; ?> ">
                  </div>
                
                  <div class="form-group">
                    <label for="Inputhb">Hasil Bagi SHU</label>
                    <input type="text" class="form-control" id="Inputhb" placeholder="hb" name = 'hb' value="<?php echo $view ['hasil_bagi']; ?> ">
                  </div>
                  
                <!-- /.card-body -->

                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
    </div>
</section>



            