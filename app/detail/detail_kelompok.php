<?php
$idklp     = $_GET['idklp'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_kelompok WHERE id='$idklp'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Kelompok</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <a href="index.php?page=data-model" class="btn btn-sm btn-info">Kembali ke Daftar Kelompok</a>
                <a href="index.php?page=list-anggota&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-info">Anggota Kelompok</a>
                <a href="index.php?page=edit-data&&idklp=<?php echo $idklp;?>" class="btn btn-sm btn-success">Edit Data Kelompok</a>
                <br></br>
                  <div class="form-group row">
                    <label for="nama kelompok" class="col-sm-2 col-form-label">Nama kelompok</label>
                    <div class="col-sm-10">
                      <label for="nama kelompok" class="col-sm-2 col-form-label">: <?php echo strtoupper($view['nama_kelompok']);?></label>
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
                  <div class="form-group row">
                    <label for="nama ketua" class="col-sm-2 col-form-label">Nama Ketua</label>
                    <div class="col-sm-10">
                      <label for="nama ketua" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['nama_ketua']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama sekertaris" class="col-sm-2 col-form-label">Nama Sekertaris</label>
                    <div class="col-sm-10">
                      <label for="nama sekertaris" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['nama_sekertaris']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama bendahara" class="col-sm-2 col-form-label">Nama Bendahara</label>
                    <div class="col-sm-10">
                      <label for="nama bendahara" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['nama_bendahara']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama kelompok" class="col-sm-2 col-form-label">Tanggal Berita Acara</label>
                    <div class="col-sm-10">
                      <label for="nama kelompok" class="col-sm-2 col-form-label">: <?php echo date("d-m-Y", strtotime($view['tanggal_berita_acara']));?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-2 col-form-label">No SK Berita Acara</label>
                    <div class="col-sm-10">
                      <label for="desa" class="col-sm-2 col-form-label">: <?php echo ($view['no_sk_berita_acara']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">No SK Kades</label>
                    <div class="col-sm-10">
                      <label for="kecamatan" class="col-sm-2 col-form-label">: <?php echo ($view['no_sk_kades']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama ketua" class="col-sm-2 col-form-label">Tanggal SK Kades</label>
                    <div class="col-sm-10">
                      <label for="nama ketua" class="col-sm-2 col-form-label">: <?php echo date("d-m-Y", strtotime($view['tanggal_sk_kades']));?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama sekertaris" class="col-sm-2 col-form-label">No Surat Domisili</label>
                    <div class="col-sm-10">
                      <label for="nama sekertaris" class="col-sm-2 col-form-label">: <?php echo ($view['no_surat_domisili']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama bendahara" class="col-sm-2 col-form-label">No Surat Permohonan Pengesahan</label>
                    <div class="col-sm-10">
                      <label for="nama bendahara" class="col-sm-2 col-form-label">: <?php echo ucfirst($view['no_surat_permohonan_pengesahan']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama kelompok" class="col-sm-2 col-form-label">Tanggal Surat Permohonan Pengesahan</label>
                    <div class="col-sm-10">
                      <label for="nama kelompok" class="col-sm-2 col-form-label">: <?php echo date("d-m-Y", strtotime($view['tanggal_surat_permohonan_pengesahan']));?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-2 col-form-label">Komoditas Utama</label>
                    <div class="col-sm-10">
                      <label for="desa" class="col-sm-2 col-form-label">: <?php echo ($view['komoditas_utama']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">SK Pengesahan</label>
                    <div class="col-sm-10">
                      <label for="kecamatan" class="col-sm-2 col-form-label">: <?php echo ($view['sk_pengesahan']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama ketua" class="col-sm-2 col-form-label">Tanggal SK Pengesahan</label>
                    <div class="col-sm-10">
                      <label for="nama ketua" class="col-sm-2 col-form-label">: <?php echo date("d-m-Y", strtotime($view['tanggal_sk_pengesahan']));?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama sekertaris" class="col-sm-2 col-form-label">Ver SK Kadis</label>
                    <div class="col-sm-10">
                      <label for="nama sekertaris" class="col-sm-2 col-form-label">: <?php 
                      if($view['ver_sk_kadis']==1){
                        echo "Sudah BerSK";
                      }
                      else {
                        echo "Belum BerSK";
                      }
                      ?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama bendahara" class="col-sm-2 col-form-label">No SK Kadis</label>
                    <div class="col-sm-10">
                      <label for="nama bendahara" class="col-sm-2 col-form-label">: <?php echo ($view['no_sk_kadis']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama kelompok" class="col-sm-2 col-form-label">Ver Terdaftar Simluhtan</label>
                    <div class="col-sm-10">
                      <label for="nama kelompok" class="col-sm-2 col-form-label">: <?php 
                      if($view['ver_terdaftar_simluhtan']==1){
                        echo "Sudah Terdaftar";
                      }
                      else {
                        echo "Belum Terdaftar";
                      }
                      ?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-2 col-form-label">SK Kemkumhan</label>
                    <div class="col-sm-10">
                      <label for="desa" class="col-sm-2 col-form-label">: <?php echo ($view['sk_kemkumhan']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal SK Kemkumhan</label>
                    <div class="col-sm-10">
                      <label for="kecamatan" class="col-sm-2 col-form-label">: <?php echo date("d-m-Y", strtotime($view['tanggal_sk_kemkumhan']));?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama ketua" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <label for="nama ketua" class="col-sm-2 col-form-label">: <?php echo ($view['keterangan']);?></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama sekertaris" class="col-sm-2 col-form-label">Status Aktif</label>
                    <div class="col-sm-10">
                      <label for="nama sekertaris" class="col-sm-2 col-form-label">: <?php 
                      if($view['status_aktif']==1){
                        echo "Aktif";
                      }
                      else {
                        echo "Tidak Aktif";
                      }
                      ?></label>
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