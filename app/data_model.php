
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kelompok Ternak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="index.php?page=tambah-data&&idklp=" class="btn btn-sm btn-info">Tambah Data Kelompok</a>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Induk</th>
                    <th>Nama Kelompok</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kelompok WHERE status_aktif='1' " );
                    while($klp = mysqli_fetch_array($query)){
                    $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $klp['id'];?></td>
                    <td><?php echo $klp['nama_kelompok'];?></td>
                    <td><?php echo $klp['desa'];?></td>
                    <td><?php echo $klp['kecamatan'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $klp['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&&idklp=<?php echo $klp['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="index.php?page=detail-kelompok&&idklp=<?php echo $klp['id'];?>" class="btn btn-sm btn-info">Detail</a>
                    </td>
                  </tr>
                  <?php }?>
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
<script>
  function hapus_data(data_id){
    //alert('ok');
    //window.location=("delete/hapus_data.php?id="+data_id);
    Swal.fire({
      title: 'Apakah Datanya akan Dihapus?',
      //showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: '#CD5C5C',
      //denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data.php?id="+data_id)
      } 
    })
  }
</script>