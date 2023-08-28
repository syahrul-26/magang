<?php
$idang     = $_GET['idang'];
$idklp     = $_GET['idklp'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE id_anggota='$idang'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Model</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_anggota.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='idklp' value="<?php echo $idklp;?>" hidden>
                        <input type="text" class="form-control" placeholder="Nama" name='idang' value="<?php echo $idang;?>" hidden>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="NIK" name="nik" value="<?php echo $view['nik'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Desa</label>
                        <input type="text" class="form-control" placeholder="Desa" name='desa' value="<?php echo $view['desa'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $view['kecamatan'];?>">
                      </div>
                    </div>
                  </div>
                <button type="submit"class="btn btnn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>