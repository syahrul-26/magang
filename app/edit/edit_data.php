<?php
$idklp     = $_GET['idklp'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_kelompok WHERE id='$idklp'");
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
                <form method='get' action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama_kelompok' value="<?php echo $view['nama_kelompok'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='id' value="<?php echo $view['id'];?>" hidden>
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
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Ketua</label>
                        <input type="text" class="form-control" placeholder="Nama Ketua" name="nama_ketua" value="<?php echo $view['nama_ketua'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Sekertaris</label>
                        <input type="text" class="form-control" placeholder="Nama Sekertaris" name="nama_sekertaris" value="<?php echo $view['nama_sekertaris'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" class="form-control" placeholder="Nama Bendahara" name="nama_bendahara" value="<?php echo $view['nama_bendahara'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Berita Acara</label>
                        <input type="text" class="form-control" placeholder="Tanggal Berita Acara" name="tanggal_berita_acara" value="<?php echo $view['tanggal_berita_acara'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No SK Berita Acara</label>
                        <input type="text" class="form-control" placeholder="No SK Berita Acara" name="no_sk_berita_acara" value="<?php echo $view['no_sk_berita_acara'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No SK Kades</label>
                        <input type="text" class="form-control" placeholder="No SK Kades" name="no_sk_kades" value="<?php echo $view['no_sk_kades'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal SK Kades</label>
                        <input type="text" class="form-control" placeholder="Tanggal SK Kades" name="tanggal_sk_kades" value="<?php echo $view['tanggal_sk_kades'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Surat Domisili</label>
                        <input type="text" class="form-control" placeholder="No Surat Domisili" name="no_surat_domisili" value="<?php echo $view['no_surat_domisili'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Surat Permohonan Pengesahan</label>
                        <input type="text" class="form-control" placeholder="No Surat Permohonan Pengesahan" name="no_surat_permohonan_pengesahan" value="<?php echo $view['no_surat_permohonan_pengesahan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Surat Permohonan Pengesahan</label>
                        <input type="text" class="form-control" placeholder="Tanggal Surat Permohonan Pengesahan" name="tanggal_surat_permohonan_pengesahan" value="<?php echo $view['tanggal_surat_permohonan_pengesahan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Komoditas Utama</label>
                        <input type="text" class="form-control" placeholder="Komoditas Utama" name="komoditas_utama" value="<?php echo $view['komoditas_utama'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>SK Pengesahan</label>
                        <input type="text" class="form-control" placeholder="SK Pengesahan" name="sk_pengesahan" value="<?php echo $view['sk_pengesahan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal SK Pengesahan</label>
                        <input type="text" class="form-control" placeholder="Tanggal SK Pengesahan" name="tanggal_sk_pengesahan" value="<?php echo $view['tanggal_sk_pengesahan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ver SK Kadis</label>
                        <input type="text" class="form-control" placeholder="Ver SK Kadis" name="ver_sk_kadis" value="<?php echo $view['ver_sk_kadis'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No SK Kadis</label>
                        <input type="text" class="form-control" placeholder="No SK Kadis" name="no_sk_kadis" value="<?php echo $view['no_sk_kadis'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ver Terdaftar Simluhtan</label>
                        <input type="text" class="form-control" placeholder="Ver Terdaftar Simluhtan" name="ver_terdaftar_simluhtan" value="<?php echo $view['ver_terdaftar_simluhtan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>SK Kemkumhan</label>
                        <input type="text" class="form-control" placeholder="SK Kemkumhan" name="sk_kemkumhan" value="<?php echo $view['sk_kemkumhan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal SK Kemkumhan</label>
                        <input type="text" class="form-control" placeholder="Tanggal SK Kemkumhan" name="tanggal_sk_kemkumhan" value="<?php echo $view['tanggal_sk_kemkumhan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="<?php echo $view['keterangan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Aktir</label>
                        <input type="text" class="form-control" placeholder="Status Aktif" name="status_aktif" value="<?php echo $view['status_aktif'];?>">
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