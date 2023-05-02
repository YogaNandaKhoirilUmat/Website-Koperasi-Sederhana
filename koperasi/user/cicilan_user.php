
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
                    <th>JUMLAH CICILAN</th>
                    <th>JUMLAH PEMBAYARAN</th>
                    <th>TANGGAL PEMBAYARAN</th>
                    <th>SISA CICILAN </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no_m = 1000 ;
                    $query=mysqli_query($koneksi,"SELECT * FROM tb_cicilan");
                    
                    while($cicilan = mysqli_fetch_array($query)){
                     $no_m++ ;
                    ?>
                  <tr>
                    <td ><?php echo $no_m ; ?>  </td>
                    <td><?php echo $cicilan['jumlah_cicilan'] ; ?>  </td>
                    <td ><?php echo $cicilan['jumlah_pembayaran'] ; ?>  </td>
                    <td ><?php echo $cicilan['tanggal_pembayaran'] ; ?>  </td>
                    <td><?php echo $cicilan['sisa_cicilan'] ; ?>  </td>
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
            <form method="POST" action="add/tambah_data_cicilan_user.php">
            <div class="modal-body">
           
            <div class="form-row">
            
                <div class="form-group col-md-12 ">
                  <label for="inputJC">Jumlah cicilan</label>
                  <input type="text" class="form-control" id="inputJC" placeholder="Jumlah cicilan" name="jc">
                </div>
                </div>
                <div class="form-group">
                  <label for="inputJumlahPembayaran">Jumlah Pembayaran</label>
                  <input type="text" class="form-control" id="inputJumlahPembayaran" placeholder="Jumlah Pembayaran" name="jp" >
                </div>
               <div class="form-group">
                  <label for="inputTP">Tanggal Pembayaran</label>
                  <input type="date" class="form-control" id="inputTP" placeholder="Tanggal Pembayaran" name="tp" >
                </div> 
                <div class="form-group">
                  <label for="inputSC">Sisa Cicilan</label>
                  <input type="text" class="form-control" id="inputSC" placeholder="Sisa Cicilan" name="sc" >
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
   
  