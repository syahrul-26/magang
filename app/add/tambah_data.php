<?php
$idklp  = $_GET['idklp'];
//$query  = mysqli_query($koneksi,"SELECT * FROM tb_kelompok WHERE id='$idklp'");
//$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <form method="get" action="add/tambah.php">
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama kelompok" class="col-sm-2 col-form-label">Nama kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama kelompok" placeholder="Nama kelompok" name="nama_kelompok" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desa" class="col-sm-2 col-form-label">Desa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="desa" placeholder="Desa" name="desa" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Nama Ketua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama ketua" placeholder="Nama Ketua" name="nama_ketua" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Nama Sekertaris</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama sekertaris" placeholder="Nama Sekertaris" name="nama_sekertaris" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Nama Bendahara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama bendahara" placeholder="Nama Bendahara" name="nama_bendahara" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal Berita Acara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal berita acara" placeholder="Tanggal Berita Acara" name="tanggal_berita_acara" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">No SK Berita Acara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no sk berita acara" placeholder="No SK Berita Acara" name="no_sk_berita_acara" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">No SK Kades</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no sk kades" placeholder="No SK Kades" name="no_sk_kades" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal SK Kades</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal sk kades" placeholder="Tanggal SK Kades" name="tanggal_sk_kades" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">No Surat Domisili</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no surat domisili" placeholder="No Surat Domisili" name="no_surat_domisili" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">No Surat Permohonan Pengesahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no surat permohonan pengesahan" placeholder="No Surat Permohonan Pengesahan" name="no_surat_permohonan_pengesahan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal Surat Permohonan Pengesahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal surat permohonan pengesahan" placeholder="Tanggal Surat Permohonan Pengesahan" name="tanggal_surat_permohonan_pengesahan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Komoditas Utama</label>
                        <div class="col-sm-10">
                        <select class="custom-select" id="inputGroupSelect01" name='komoditas_utama' required>
                            <option value="1">Sapi</option>
                            <option value="2">Kambing</option>
                            <option value="3">Domba</option>
                            <option value="4">Itik</option>
                            <option value="5">Ayam Buras</option>
                            <option value="6">Ayam Petelur</option>
                            <option value="7">Olahan Hasil Ternak</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">SK Pengesahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk pengesahan" placeholder="SK Pengesahan" name="sk_pengesahan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal SK Pengesahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk pengesahan" placeholder="Tanggal SK Pengesahan" name="tanggal_sk_pengesahan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Ver SK Kadis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ver sk kadis" placeholder="Ver SK Kadis" name="ver_sk_kadis" required>
                        </div>
                    </div><div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">No SK Kadis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no sk kadis" placeholder="No SK Kadis" name="no_sk_kadis" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Ver Terdaftar Simluhtan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ver terdaftar simluhtan" placeholder="Ver Terdaftar Simluhtan" name="ver_terdaftar_simluhtan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">SK Kemkumhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk kemkumhan" placeholder="SK Kemkumhan" name="sk_kemkumhan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Tanggal SK Kemkumhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal sk kemkumhan" placeholder="Tanggal SK Kemkumhan" name="tanggal_sk_kemkumhan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Status Aktif</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status aktif" placeholder="Status Aktif" name="status_aktif" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
    </div>
</section>
