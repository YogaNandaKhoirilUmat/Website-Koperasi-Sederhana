
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
                    <th>NO SIMPANAN</th>
                    <th>STATUS</th>
                    <th>JUMLAH SIMPANAN</th>
                    <th>JENIS SIMPANAN</th>
                    <th>TANGGAL SIMPAN </th>
                    <th>Action </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no_s = 'A-1000' ;
                    $query=mysqli_query($koneksi,"SELECT * FROM tb_simpanan");
                    
                    while($simpanan = mysqli_fetch_array($query)){
                     $no_s++ ;
                    ?>
                  <tr>
                    <td ><?php echo $no_s ; ?>  </td>
                    <td><?php echo $simpanan['status_s'] ; ?>  </td>
                    <td><?php echo $simpanan['jumlah_simpanan'] ; ?>  </td>
                    <td ><?php echo $simpanan['jenis_simpanan'] ; ?>  </td>
                    <td><?php echo $simpanan['tanggal_simpan'] ; ?>  </td>
                    <td>
                      <a onclick="hapus_data_simpanan ( <?php echo $simpanan['no_s']; ?>)" class="btn btn-sm btn-danger"> Hapus</a>
                      <a href="halaman.php?page=edit-simpanan-anggota&&  no_s=<?php echo $simpanan['no_s'] ;?>" class="btn btn-sm btn-success "> Edit</a>
                    </td>
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
            <form method="POST" action="add/tambah_data_simpanan.php">
            <div class="modal-body">
           
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputstatus">STATUS</label>
                  <input type="text" class="form-control" id="inputstatus" placeholder="STATUS" name="status" required>
                </div>
                <div class="form-group col-md-12 ">
                  <label for="inputJS">Jumlah Simpanan</label>
                  <input type="text" class="form-control" id="inputJS" placeholder="Jumlah Simpanan" name="js">
                </div>
                </div>
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
                <div class="form-group">
                  <label for="inputTS">Tanggal Simpan</label>
                  <input type="date" class="form-control" id="inputTS" placeholder="Tanggal Simpan" name="ts" >
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
   
  <script>
    function hapus_data_simpanan(data_simpanan){
      // alert();
      // window.location=("delete/hapus_data_simpanan.php?no_s="+data_simpanan);
      Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Anda akan menghapus data ini!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location=("delete/hapus_data_simpanan.php?no_s="+data_simpanan);
    Swal.fire(
      'Terhapus!',
      'Data ini telah terhapus.',
      'success'
    )
  }
})
    }
  </script>