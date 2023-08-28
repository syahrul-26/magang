<?php
$idklp  = $_GET['idklp'];
//$query  = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE id='$idang'");
//$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="card-title">Tambah Anggota</h3>
        </div>
        <form method="get" action="add/proses_tambah_anggota.php">
            <div class="modal-body">
                <div class="card-body">
                <div class="form-group row">
                        <label for="id kelompok" class="col-sm-2 col-form-label">ID Kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value=<?php echo $idklp; ?> class="form-control" id="nama" placeholder="ID Kelompok" name="idklp" editable="false" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama kelompok" class="col-sm-2 col-form-label">Nama Anggota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Anggota" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" required>
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
