<?php
$idang = $_GET['idang'];
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
                <h3 class="card-title">Daftar Komoditas yang dimiliki</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="index.php?page=tambah-komoditas&&idang=<?php echo $idang;?>&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Tambah Komoditas</a>
                <a href="index.php?page=list-anggota&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Kembali ke List Anggota</a>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Komoditas</th>
                    <th>Jumlah Komoditas</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_komoditas WHERE id_pemilik=$idang");
                    while($kom = mysqli_fetch_array($query)){
                    $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td>
                    <?php
                    $idkomoditas = $kom['jenis_komoditas'];
                    $queryjenis = mysqli_query($koneksi,"SELECT * FROM jenis_komoditas WHERE id_komoditas=$idkomoditas");
                    $jenis = mysqli_fetch_array($queryjenis);
                    echo ucfirst( $jenis['nama']);
                    ?>
                    </td>
                    <td><?php echo $kom['jumlah_komoditas'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $kom['id_komoditas'];?>,<?php echo $idang; ?>,<?php echo $idklp; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-komoditas&&idklp=<?php echo $idklp;?>&&idang=<?php echo $idang?>&&idkmd=<?php echo $kom['id_komoditas'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="index.php?page=detail-anggota&&idang=<?php echo $idang;?>" class="btn btn-sm btn-info">Detail</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                    
                  </tfoot>
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
  function hapus_data(data_id,data_idang,data_klp){
    //alert('ok');
    //window.location=("delete/hapus_komoditas.php?id="+data_id);
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
        //alert('masuk ke if');
        window.location=("delete/hapus_komoditas.php?idkmd="+data_id+"&&idang="+data_idang+"&&idklp="+data_klp);
      } 
    })
  }
</script>