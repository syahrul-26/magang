<?php
$idang  = $_GET['idang'];
$idklp  = $_GET['idklp'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE id_anggota='$idang'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Anggota</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <a href="index.php?page=list-anggota&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Kembali ke List Anggota</a>
                <a href="index.php?page=list-komoditas&&idang=<?php echo $idang;?>&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Komoditas yang dimiliki</a>
                <a href="index.php?page=edit-anggota&&idklp=<?php echo $idklp;?>&&idang=<?php echo $idang;?>" class="btn btn-sm btn-success">Edit Data Anggota</a>
                <br></br>
                  <div class="form-group row">
                    <label for="nama kelompok" class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                      <label for="nama anggota" class="col-sm-2 col-form-label">: <?php echo strtoupper($view['nama']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama ketua" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <label for="nik" class="col-sm-2 col-form-label">: <?php echo ($view['nik']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                      <label for="desa" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['desa']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <label for="kecamatan" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['kecamatan']);?></label>
                    </div>
                  </div>
                  
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </div>
</section>