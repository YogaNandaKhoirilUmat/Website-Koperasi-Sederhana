
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> 
            <!-- /.card -->

            
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO MEMBER</th>
                    <th>Jumlah Dana</th>
                    <th>Total SHU </th>
                    <th>Hasil Bagi SHU </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no_m = 1000 ;
                    $query=mysqli_query($koneksi,"SELECT * FROM tb_shu");
                    
                    while($shu = mysqli_fetch_array($query)){
                     $no_m++ ;
                    ?>
                  <tr>
                    <td ><?php echo $no_m ; ?>  </td>
                    <td><?php echo $shu['jumlah_dana'] ; ?>  </td>
                    <td ><?php echo $shu['total_shu'] ; ?>  </td>
                    <td ><?php echo $shu['hasil_bagi'] ; ?>  </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Diri</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="add/tambah_data_shu_user.php">
            <div class="modal-body">
           
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputJD">Jumlah Dana</label>
                  <input type="text" class="form-control" id="inputJD" placeholder="Jumlah Dana" name="jd" required>
                </div>
                <div class="form-group col-md-12 ">
                  <label for="inputTS">Total SHU</label>
                  <input type="text" class="form-control" id="inputTS" placeholder="Total SHU" name="ts">
                </div>
                </div>
                <div class="form-group">
                  <label for="inputHB">Hasil Bagi SHU</label>
                  <input type="text" class="form-control" id="inputHB" placeholder="Hasil Bagi SHU" name="hb" >
                </div>
              
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
          </div>
          <form>

          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   