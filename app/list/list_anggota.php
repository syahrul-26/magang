<?php
$idklp = $_GET['idklp'];

?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Anggota Kelompok Ternak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="index.php?page=tambah-anggota&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Tambah Anggota</a>
                <a href="index.php?page=data-model" class="btn btn-sm btn-info" >Kembali ke Daftar Kelompok</a>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE id_kelompok=$idklp");
                    while($ang = mysqli_fetch_array($query)){
                    $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $ang['nama'];?></td>
                    <td><?php echo $ang['desa'];?></td>
                    <td><?php echo $ang['kecamatan'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $ang['id_anggota'];?>,<?php echo $idklp; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-anggota&&idklp=<?php echo $idklp;?>&&idang=<?php echo $ang['id_anggota'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="index.php?page=detail-anggota&&idklp=<?php echo $idklp;?>&&idang=<?php echo $ang['id_anggota'];?>" class="btn btn-sm btn-info">Detail</a>
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
  function hapus_data(data_id,data_klp){
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
        window.location=("delete/hapus_anggota.php?idang="+data_id+"&&idklp="+data_klp)
      } 
    })
  }
</script>