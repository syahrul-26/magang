 <?php
$idklp  = $_GET['idklp'];
$idang  = $_GET['idang'];
$idkmd  = $_GET['idkmd'];
$query  = mysqli_query($koneksi,"SELECT * FROM tb_komoditas WHERE id_komoditas='$idkmd'");
$view   = mysqli_fetch_array($query);
$idjeniskomoditas = $view['jenis_komoditas'];
?>
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="card-title">Edit Komoditas</h3>
        </div>
        <form method="get" action="update/update_komoditas.php">
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="id kelompok" class="col-sm-2 col-form-label">ID Pemilik</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value=<?php echo $idang; ?> class="form-control" id="nama" placeholder="ID Pemilik" name="idang" editable="false">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id kelompok" class="col-sm-2 col-form-label">ID Kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value=<?php echo $idklp; ?> class="form-control" id="nama" placeholder="ID Kelompok" name="idklp" editable="false">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama kelompok" class="col-sm-2 col-form-label">Jenis Komoditas</label>
                        <div class="col-sm-10">
                            <?php
                            $queryjenis = mysqli_query($koneksi,"SELECT * FROM jenis_komoditas WHERE id_komoditas=$idjeniskomoditas");
                            $jenis = mysqli_fetch_array($queryjenis);
                            $pilihankomoditas = ucfirst( $jenis['nama']);
                            ?>
                        <select class="custom-select" id="inputGroupSelect01" name='idkmd'>
                            <option readonly value="<?php echo $idjeniskomoditas ?>"><?php echo $pilihankomoditas ?></option>
                            
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Jumlah Komoditas</label>
                        <div class="col-sm-10">
                            <input type="number" value="<?php echo $view['jumlah_komoditas']; ?>" class="form-control" id="jumlah komoditas" placeholder="Jumlah Komoditas" name="jumlah_komoditas">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"class="btn btnn-sm btn-info">Simpan</button>
        </form>
    </div>
</section>
