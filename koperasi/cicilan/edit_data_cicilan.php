<?php
$no_m  = $_GET['no_m'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_cicilan WHERE no_m='$no_m'");
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
              <form method='post' action='update/update_data_cicilan.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Inputjumlahcicilan">Jumlah Cicilan</label>
                    <input type="text" class="form-control" id="Inputjumlahcicilan" placeholder="jumlah cicilan" name = 'jc' value="<?php echo $view ['jumlah_cicilan']; ?> ">
                    <input type="text" class="form-control" id="Inputjumlahcicilan" placeholder="jumlah cicilan" name = 'no_m' value="<?php echo $view ['no_m']; ?> " hidden>
                    </div>

                  <div class="form-group">
                    <label for="Inputjumlahpembayaran">Jumlah Pembayaran</label>
                    <input type="text" class="form-control" id="Inputjumlahpembayaran" placeholder="jumlah pembayaran" name = 'jp' value="<?php echo $view ['jumlah_pembayaran']; ?> ">
                  </div>
                
                  <div class="form-group">
                    <label for="Inputsisacicilan">Sisa Cicilan</label>
                    <input type="text" class="form-control" id="Inputsisacicilan" placeholder="sisa cicilan" name = 'sc' value="<?php echo $view ['sisa_cicilan']; ?> ">
                  </div>
                  
                <!-- /.card-body -->

                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
    </div>
</section>



            