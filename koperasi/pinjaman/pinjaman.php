
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
                    <th>NO PINJAMAN</th>
                    <th>STATUS</th>
                    <th>JUMLAH PINJAMAN</th>
                    <th>TEMPO</th>
                    <th>ANGSURAN </th>
                    <th>TANGGAL PINJAM </th>
                    <th>Action </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no_p = 'P-1000' ;
                    $query=mysqli_query($koneksi,"SELECT * FROM tb_pinjaman");
                    
                    while($pinjaman = mysqli_fetch_array($query)){
                     $no_p++ ;
                    ?>
                  <tr>
                    <td ><?php echo $no_p ; ?>  </td>
                    <td><?php echo $pinjaman['status_p'] ; ?>  </td>
                    <td><?php echo $pinjaman['jumlah_pinjaman'] ; ?>  </td>
                    <td ><?php echo $pinjaman['tempo'] ; ?>  </td>
                    <td ><?php echo $pinjaman['angsuran'] ; ?>  </td>
                    <td><?php echo $pinjaman['tanggal_pinjam'] ; ?>  </td>
                    <td>
                      <a onclick="hapus_data_pinjaman ( <?php echo $pinjaman['no_p']; ?>)" class="btn btn-sm btn-danger"> Hapus</a>
                      <a href="halaman.php?page=edit-pinjaman-anggota&&  no_p=<?php echo $pinjaman['no_p'] ;?>" class="btn btn-sm btn-success "> Edit</a>
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
            <form method="POST" action="add/tambah_data_pinjaman.php">
            <div class="modal-body">
           
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputstatus">STATUS</label>
                  <input type="text" class="form-control" id="inputstatus" placeholder="STATUS" name="status" required>
                </div>
                <div class="form-group col-md-12 ">
                  <label for="inputJP">Jumlah Pinjaman</label>
                  <input type="text" class="form-control" id="inputJP" placeholder="Jumlah Pinjaman" name="jp">
                </div>
                </div>
                <div class="form-group">
                  <label for="inputTempo">Tempo</label>
                  <input type="text" class="form-control" id="inputTempo" placeholder="Tempo" name="tempo" >
                </div>
                <div class="form-group">
                  <label for="inputAngsuran">Angsuran</label>
                  <input type="text" class="form-control" id="inputAngsuran" placeholder="Angsuran" name="angsuran" >
                </div>
                <div class="form-group">
                  <label for="inputTP">Tanggal Pinjam</label>
                  <input type="date" class="form-control" id="inputTP" placeholder="Tanggal Pinjam" name="tp" >
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
    function hapus_data_pinjaman(data_pinjaman){
      // alert();
      // window.location=("delete/hapus_data_pinjaman.php?no_s="+data_pinjaman);
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
    window.location=("delete/hapus_data_pinjaman.php?no_p="+data_pinjaman);
    Swal.fire(
      'Terhapus!',
      'Data ini telah terhapus.',
      'success'
    )
  }
})
    }
  </script>