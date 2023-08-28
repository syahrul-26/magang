 <?php
$idklp  = $_GET['idklp'];
$idang  = $_GET['idang'];
//$query  = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE id='$idang'");
//$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="card-title">Tambah Komoditas</h3>
        </div>
        <form method="get" action="add/proses_tambah_komoditas.php">
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="id kelompok" class="col-sm-2 col-form-label">ID Pemilik</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value=<?php echo $idang; ?> class="form-control" id="nama" placeholder="ID Pemilik" name="idang" editable="false" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id kelompok" class="col-sm-2 col-form-label">ID Kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value=<?php echo $idklp; ?> class="form-control" id="nama" placeholder="ID Kelompok" name="idklp" editable="false" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama kelompok" class="col-sm-2 col-form-label">Jenis Komoditas</label>
                        <div class="col-sm-10">
                        <select class="custom-select" id="inputGroupSelect01" name='jenis_komoditas'>
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
                        <label for="kecamatan" class="col-sm-2 col-form-label">Jumlah Komoditas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jumlah komoditas" placeholder="Jumlah Komoditas" name="jumlah_komoditas" required>
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
